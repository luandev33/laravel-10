 @extends('index')

 @section('content')
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2">Produtos</h1>
     </div>

     <form action="" method="get">
         <input type="text" name="pesquisar" placeholder="Pequisar">
         <button class="btn btn-primary">Pesquisar</button>
         <a href="" type="button" class="btn btn-success float-end" >Adicionar Produto</a>
     </form>
 @endsection
