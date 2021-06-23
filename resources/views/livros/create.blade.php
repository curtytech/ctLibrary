<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        label {
            float: left;
            display: block;
            width: 90px;
        }
    </style>
</head>

<body>
    <form action="{{ route('salvar_livro') }}" method="post">
        @csrf
        <div> <label for="isbn"> ISBN </label> <input type="text" name="isbn" id="isbn"> </div>
        <div> <label for="nome"> Nome </label> <input type="text" name="nome" id="nome"> </div>
        <div> <label for="autor"> Autor </label> <input type="text" name="autor" id="autor"> </div>
        <div> <label for="preco"> Preço </label> <input type="number" name="preco" id="preco"> </div>
        <button type="submit">Salvar</button>

    </form>


</body>

</html>