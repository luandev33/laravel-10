<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class ProdutoController extends Controller
{
      public function __construct(Produto $produto){
          $this->produto = $produto;
      }

   public function index(Request $request){
      
      $pesquisar = $request->pesquisar;

      $findProduto = $this->produto->getProdutosPesquisarIndex(search: $pesquisar ?? '');
      return view('pages.produtos.paginacao' , compact('findProduto'));
      
   }

   public function delete(Request $request){
      $id = $request->id;
      $buscaRegistro = Produto::find($id);
      $buscaRegistro->delete();
      return response()->json(['success' => true]);
   }


}
