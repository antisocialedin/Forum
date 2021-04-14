<?php

namespace App\Http\Controllers;

use App\models\Comunidade;
use Illuminate\Cache\Repository;
use Illuminate\Http\Request;
use App\Http\Requests\ComunidadeRequest;

class ComunidadeController extends Controller
{
    private $repository;
    protected $request;

    public function __construct(Request $request, Comunidade $comunidade)
    {
        $this->repository = $comunidade;
        $this->request = $request;
    }

// ------------------------------------Listar Comunidades----------------------------------------------------- //
    //retorna a pagina de listagem de Comunidades
    public function index(Request $request)
    {
        $registros = $this->repository->paginate(10); //padrão do paginate() são 15 registros
        return view('comunidade.index', [
            'registros' => $registros,
        ]);
    }

// ------------------------------------Pesquisar Comunidades----------------------------------------------------- //
//retorna registro de um Comunidade
    public function search(Request $request)
    {
        $filters = $request->all();

        $registros = $this->repository->search($request->nick);

        return view('comunidade.index', [
            'registros' => $registros,
            'filters' => $filters,
        ]);
    }

// ------------------------------------Incluir Comunidades----------------------------------------------------- //
    //retorna a pagina para Cadastrar um novo comunidade
    public function new()
    {
        return view('comunidade.incluir');
    }

    //salvar o registro de um novo comunidade
    public function create(ComunidadeRequest $request)
    {
        $registro = $request->all();
        $this->repository->create($registro);

        return redirect()->route('comunidade.listar')->with('success', 'Registro Cadastrado com sucesso!');;
    }

// ------------------------------------Alterar Comunidades----------------------------------------------------- //
    //retorna o registro de um comunidade para a alteração dos dados
    public function update($id)
    {
        $registro = $this->repository->find($id);

        if (!$registro) {
            return redirect()->back();
        }

        return view('comunidade.alterar', [
            'registro'=>$registro,
        ]);
    }

    //alterar no banco o registro do comunidade que modificado pelo comunidade - tela
    public function save(ComunidadeRequest $request, $id)
    {
        $data = $request->all();
        $registro = $this->repository->find($id);
        $registro->update($data);
        
        return redirect()->route('comunidade.listar')->with('success', 'Registro Alterado com sucesso!');
    }

// ------------------------------------Excluir comunidades----------------------------------------------------- //
    //retorna o registro de um comunidade para excluir do banco de dados
    public function delete($id)
    {
        $registro = $this->repository->find($id);
        if (!$registro) {
            return redirect()->back();
        }
        return view('comunidade.excluir', [
            'registro' => $registro,
        ]);
    }

    //excluir no banco o registro do autor
    public function excluir($id)
    {
        $registro = $this->repository->find($id);
        $registro->delete();
        return redirect()->route('comunidade.listar')->with('success', 'Registro Excluído com sucesso!');;
    }

// ------------------------------------Consultar comunidades----------------------------------------------------- //
    //retorna o registro para consultar - ver o registro na tela
    public function view($id)
    {
        $registro = $this->repository->find($id);

        if (!$registro) {
            return redirect()->back();
        }

        return view('comunidade.consultar', [
            'registro' => $registro,
        ]);
    }


// ------------------------------------Cancelar Operação----------------------------------------------------- //
    //cancela a operação do comunidade
    public function cancel()
    {
        return redirect()->route('comunidade.listar');
    }

}
