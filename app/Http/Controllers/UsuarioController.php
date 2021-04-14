<?php

namespace App\Http\Controllers;

use App\models\Usuario;
use Illuminate\Cache\Repository;
use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;

class UsuarioController extends Controller
{
    private $repository;
    protected $request;

    public function __construct(Request $request, Usuario $usuario)
    {
        $this->repository = $usuario;
        $this->request = $request;
    }

// ------------------------------------Listar Usuarios----------------------------------------------------- //
    //retorna a pagina de listagem de Usuarios
    public function index(Request $request)
    {
        $registros = $this->repository->paginate(10); //padrão do paginate() são 15 registros
        return view('usuario.index', [
            'registros' => $registros,
        ]);
    }

// ------------------------------------Pesquisar Usuarios----------------------------------------------------- //
//retorna registro de um usuario
    public function search(Request $request)
    {
        $filters = $request->all();

        $registros = $this->repository->search($request->nick);

        return view('usuario.index', [
            'registros' => $registros,
            'filters' => $filters,
        ]);
    }

// ------------------------------------Incluir Usuarios----------------------------------------------------- //
    //retorna a pagina para cadastrar um novo usuario
    public function new()
    {
        return view('usuario.incluir');
    }

    //salvar o registro de um novo usuario
    public function create(UsuarioRequest $request)
    {
        $registro = $request->all();
        $this->repository->create($registro);

        return redirect()->route('usuario.listar')->with('success', 'Registro Cadastrado com sucesso!');;
    }

// ------------------------------------Alterar Usuarios----------------------------------------------------- //
    //retorna o registro de um usuario para a alteração dos dados
    public function update($id)
    {
        $registro = $this->repository->find($id);

        if (!$registro) {
            return redirect()->back();
        }

        return view('usuario.alterar', [
            'registro'=>$registro,
        ]);
    }

    //alterar no banco o registro do usuario que modificado pelo usuario - tela
    public function save(UsuarioRequest $request, $id)
    {
        $data = $request->all();
        $registro = $this->repository->find($id);
        $registro->update($data);
        
        return redirect()->route('usuario.listar')->with('success', 'Registro Alterado com sucesso!');
    }

// ------------------------------------Excluir Usuarios----------------------------------------------------- //
    //retorna o registro de um usuario para excluir do banco de dados
    public function delete($id)
    {
        $registro = $this->repository->find($id);
        if (!$registro) {
            return redirect()->back();
        }
        return view('usuario.excluir', [
            'registro' => $registro,
        ]);
    }

    //excluir no banco o registro do autor
    public function excluir($id)
    {
        $registro = $this->repository->find($id);
        $registro->delete();
        return redirect()->route('usuario.listar')->with('success', 'Registro Excluído com sucesso!');;
    }

// ------------------------------------Consultar Usuarios----------------------------------------------------- //
    //retorna o registro para consultar - ver o registro na tela
    public function view($id)
    {
        $registro = $this->repository->find($id);

        if (!$registro) {
            return redirect()->back();
        }

        return view('usuario.consultar', [
            'registro' => $registro,
        ]);
    }


// ------------------------------------Cancelar Operação----------------------------------------------------- //
    //cancela a operação do usuario
    public function cancel()
    {
        return redirect()->route('usuario.listar');
    }

}