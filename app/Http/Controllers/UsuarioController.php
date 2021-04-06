<?php

namespace App\Http\Controllers;

use App\models\Usuario;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    private $repository;
    protected $request;

    public function __construct(Request $request, Usuario $usuario )
    {
        $this->repository = $usuario;
        $this->request = $request;
    }

    //retorna a pagina de listagem de Usuarios
    public function index(Request $request)
    {
        $registros = $this->repository->all();
        return view('usuario.index', [
            'registros' => $registros,
        ]);
    }

    //retorna a pagina para cadastrar um novo usuario
    public function new()
    {
        return view('usuario.incluir');
    }

    //salvar o registro de um novo usuario
    public function create(Request $request)
    {
        return view('usuario.index'); //aqui
    }

    //retorna o registro de um usuario para a alteração dos dados
    public function update($id)
    {
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }

        return view('usuario.alterar', [
            'registro' => $registro,
        ]);
    }

    //retorna o registro de um usuario para excluir do banco de dados
    public function delete($id)
    {
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }

        return view('usuario.excluir', [
            'registro' => $registro,
        ]);
    }

    //retorna o registro para consultar - ver o registro na tela
    public function consult($id)
    {
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }

        return view('usuario.consultar', [
            'registro' => $registro,
        ]);
    }

    //alterar no banco o registro do usuario que modificado pelo usuario - tela
    public function save(Request $request, $id)
    {
        return view('usuario.listar');
    }

    //excluir no banco o registro do autor
    public function excluir(Request $request, $id)
    {
        return view('usuario.listar');
    }

    //cancela a operação do usuario
    public function cancel()
    {
        return redirect()->route('usuario.listar');
    }
}
