<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar novo livro</title>
        <style>
            label{
                float: left;
                display: block;
                width:90px;
            }
        </style>
    </head>
    <body>
        <form action="{{ route('atualizar_livro', ['id' => $livro->id]) }}" method="post">
        @csrf
            <div><label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" value="{{$livro->isbn}}"></div>
            <div><label for="nome">Nome</label>
            <input type="text" name="nome" id="nome"  value="{{$livro->nome}}"></div>
            <div><label for="custo">Autor</label>
            <input type="text" name="autor" id="autor"  value="{{$livro->autor}}"></div>
            <div><label for="preco">Preço</label>
            <input type="text" name="preco" id="preco"  value="{{$livro->preco}}"></div>
            <button type="submit">Salvar</button>
        </form> 
    </body>
</html>