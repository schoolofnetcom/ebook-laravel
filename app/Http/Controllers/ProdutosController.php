<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;
use App\Repositories\Contracts\ProdutoRepositoryInterface;

class ProdutosController extends Controller
{

    private $produtoRepository;

    public function __construct(ProdutoRepositoryInterface $produtoRepository)
    {
        $this->produtoRepository = $produtoRepository;
    }

    public function index()
    {
        $produtos = $this->produtoRepository->getAll();

        return view('produtos.index',['produtos'=>$produtos]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(ProdutoRequest $request)
    {
        $input = $request->all();
        $this->produtoRepository->create($input);

        return redirect()->route('produtos');
    }

    public function edit($id)
    {
        $produto = $this->produtoRepository->find($id);

        return view('produtos.edit', compact('produto'));
    }

    public function update(ProdutoRequest $request, $id)
    {
        $produto = $this->produtoRepository->find($id)->update($request->all());

        return redirect()->route('produtos');
    }

    public function destroy($id)
    {
        $this->produtoRepository->find($id)->delete();

        return redirect()->route('produtos');
    }
}
