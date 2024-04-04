
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criar Pessoa</title>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body>    
    <header class="navbar sticky-top bg-dark">
        <a class="navbar-brand" href="#">Sistema de Cadastro de Pessoas</a>
    </header>

    <div class="container">
        <div class="row">
            <main class="col">
                <form class="form" method="#" action="#">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" placeholder="Informe o nome completo" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" placeholder="Informe o email" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" id="telefone" placeholder="Informe o telefone" class="form-control"/>
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar Pessoa</button>
                </form>
            </main>
        </div>
    </div>

</body>
</html>
