<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criar Pessoa</title>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body>    
    <header class="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">Sistema de Cadastro de Pessoas</a>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <main class="col">
                <div class="section-header">
                    <h1>Cadastro de Pessoas</h1>
                </div>
                <form class="form" method="POST" action="{{ route('cadastrar.pessoa') }}">
                    @csrf
                    <div class="form-group">
                        <label>Nome Completo</label>
                        <input type="text" name="nome" placeholder="Informe o nome completo"/>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email" placeholder="Informe o email"/>
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" name="telefone" placeholder="Informe o telefone"/>
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea type="text" name="descricao" placeholder="Informe uma Descrição"></textarea>
                    </div>
                    <button type="submit" class="btn btn-cadastro">Salvar</button>
                </form>
            </main>
        </div>
    </div>
</body>
</html>
