<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Pessoas</title>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body>    
    <header class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Sistema de Cadastro de Pessoas</a>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <main class="col">
                <div class="section-header">
                    <h1>Lista de Pessoas</h1>
                    <a href="{{ route('cadastrar.pessoa') }}" class="btn btn-success">Cadastrar Pessoa</a>
                </div>
                <div class="table-wrapper">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nome Teste</td>
                                <td>teste@gmail.com</td>
                                <td>(49) 999123456</td>
                                <td>Excluir/Editar</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
