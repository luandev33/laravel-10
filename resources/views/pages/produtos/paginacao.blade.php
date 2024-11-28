 @extends('index')

 @section('content')
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2">Produtos</h1>
     </div>

     <form action="{{ route('produto.index') }}" method="get">
         <input type="text" name="pesquisar" placeholder="Pequisar">
         <button type="submit" class="btn btn-primary">Pesquisar</button>
         <a href="" type="button" class="btn btn-success float-end">Adicionar Produto</a>
     </form>


     <h2>Section title</h2>
     <div class="table-responsive small mt-4">
         @if ($findProduto->isEmpty())
             <p> Não Existe Dados</p>
         @else
             <table class="table table-striped table-sm">
                 <thead>
                     <tr>
                         <th>Nome</th>
                         <th>Valor</th>
                         <th>Açoes</th>
                     </tr>
                 </thead>
                 <tbody>

                     @foreach ($findProduto as $produto)
                         <tr>
                             <td>{{ $produto->nome }}</td>
                             <td>{{ 'R$' . ' ' . number_format($produto->valor, 2, ',', '.') }}</td>

                             <td>
                                 <a href="#" class="btn btn-light btn-sm">Editar</a>
                                 <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                             </td>

                         </tr>
                     @endforeach

                 </tbody>
             </table>
             @endif
     </div>
 @endsection
