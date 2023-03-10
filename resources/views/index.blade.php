@extends('templates.template')
@section('content')
<h1 class="text-center">CRUD</h1>

<div class="text-center mt-3 mb-4">
  <a href="" >
    <button class="btn btn-success">Cadastrar</button>
  </a>
</div>

<div class="col-8 m-auto">
    <table class="table text-center" >
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
           <!----<th scope="col">Autor</th>---->
            <th scope="col">Preço</th>
            <th scope="col">Id do autor</th>
            
          </tr>
        </thead>
      
        <tbody>
          @if(!empty($book))
        

          @foreach($book as $books)
          
          
          <tr>
            <th scope="row">{{$books->id}}</th>
            <td>{{$books->title}}</td>
          <!---  <td>##</td>--->
            <td>{{$books->price}}</td>
            <td>{{$books->id_user}}</td>
            <td>
              <a href=""> 
                <button class="btn btn-dark">Visualizar</button>
              </a>
              <a href=""> 
                <button class="btn btn-primary">Editar</button>
              </a>
              <a href=""> 
                <button class="btn btn-danger">Deletar</button>
              </a>
            </td>
          </tr>

          
          @endforeach
      @endif
      

          
         
        </tbody>
      </table>
</div>

@endsection