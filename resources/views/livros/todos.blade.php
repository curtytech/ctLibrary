@extends('layouts.main')

@section('title', 'Livros')

@section('content')

<body>
    <div class="container">
        <div class="row text-right">
            <a class="btn btn-success mt-2 " href=" /livro/novo ">Adicionar Livro</a>
        </div>
        <table class="table table-striped mt-2">
            <tr>
                <th>ISBN</th>
                <th>Autor</th>
                <th>Título</th>
                <th>Preço</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($livros as $livro)
            <tr>
                <td>{{$livro->isbn}}</td>
                <td>{{$livro->autor}}</td>
                <td>{{$livro->nome}}</td>
                <td>{{$livro->preco}}</td>
                <td><a class="btn btn-primary" href="{{ route('editar_livro', ['id'=>$livro->id])}}" title="Editar livro {{ $livro->nome }}">Editar</a></td>

                <td ><a class="btn btn-danger" href="{{ route('excluir_livro', ['id'=>$livro->id])}}" title="Excluir livro {{ $livro->nome }}">Excluir</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    @endsection

</body>

</html>