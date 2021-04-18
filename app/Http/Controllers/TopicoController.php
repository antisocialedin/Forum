<?php

namespace App\Http\Controllers;

use App\models\Usuario;
use App\models\Comunidade;
use App\models\Topico;
use Illuminate\Cache\Repository;
use Illuminate\Http\Request;
use App\Http\Requests\TopicoRequest;

class TopicoController extends Controller
{
    private $repository;
    protected $request;

    public function __construct(Request $request, Topico $topico)
    {
        $this->repository = $topico;
        $this->request = $request;
    }

    // ------------------------------------Listar topicos----------------------------------------------------- //
    //retorna a pagina de listagem de topicos
    public function index(Request $request)
    {
        $registros = $this->repository->paginate(10); //padrão do paginate() são 15 registros
        return view('topico.index', [
            'registros' => $registros,
        ]);
    }

    // ------------------------------------Pesquisar topicos----------------------------------------------------- //
    //retorna registro de um topico
    public function search(Request $request)
    {
        $filters = $request->all();

        $registros = $this->repository->search($request->titulo);

        return view('topico.index', [
            'registros' => $registros,
            'filters' => $filters,
        ]);
    }

    // ------------------------------------Incluir topicos----------------------------------------------------- //
    //retorna a pagina para cadastrar um novo topico
    public function new()
    {
        $comunidades = Comunidade::all();
        $usuarios = Usuario::all();

        return view('topico.incluir', [
            'comunidades' => $comunidades,
            'usuarios' => $usuarios,
        ]);
    }

    //salvar o registro de um novo topico
    public function create(TopicoRequest $request)
    {
        $registro = $request->all();
        $this->repository->create($registro);

        return redirect()->route('topico.listar')->with('success', 'Registro Cadastrado com sucesso!');;
    }

    // ------------------------------------Alterar topicos----------------------------------------------------- //
    //retorna o registro de um topico para a alteração dos dados
    public function update($id)
    {
        $comunidades = Comunidade::all();
        $usuarios = Usuario::all();
        
        $registro = $this->repository->find($id);

        if (!$registro) {
            return redirect()->back();
        }

        return view('topico.alterar', [
            'registro' => $registro,
            'comunidades' => $comunidades,
            'usuarios' => $usuarios,
        ]);
    }

    //alterar no banco o registro do topico que modificado pelo topico - tela
    public function save(TopicoRequest $request, $id)
    {
        $data = $request->all();
        $registro = $this->repository->find($id);
        $registro->update($data);

        return redirect()->route('topico.listar')->with('success', 'Registro Alterado com sucesso!');
    }

    // ------------------------------------Excluir topicos----------------------------------------------------- //
    //retorna o registro de um topico para excluir do banco de dados
    public function delete($id)
    {
        $comunidades = Comunidade::all();
        $usuarios = Usuario::all();
        $registro = $this->repository->find($id);

        if (!$registro) {
            return redirect()->back();
        }
        return view('topico.excluir', [
            'registro' => $registro,
            'comunidades' => $comunidades,
            'usuarios' => $usuarios,
        ]);
    }

    //excluir no banco o registro do autor
    public function excluir($id)
    {
        $registro = $this->repository->find($id);
        $registro->delete();
        return redirect()->route('topico.listar')->with('success', 'Registro Excluído com sucesso!');;
    }

    // ------------------------------------Consultar topicos----------------------------------------------------- //
    //retorna o registro para consultar - ver o registro na tela
    public function view($id)
    {
        $comunidades = Comunidade::all();
        $usuarios = Usuario::all();
        $registro = $this->repository->find($id);

        if (!$registro) {
            return redirect()->back();
        }

        return view('topico.consultar', [
            'registro' => $registro,
            'comunidades' => $comunidades,
            'usuarios' => $usuarios,
        ]);
    }


    // ------------------------------------Cancelar Operação----------------------------------------------------- //
    //cancela a operação do topico
    public function cancel()
    {
        return redirect()->route('topico.listar');
    }
}
