<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Pessoas</title>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
                    <a href="{{ route('cadastrar.pessoa') }}" class="btn btn-success">Cadastro</a>
                </div>
                <div class="table-wrapper">
                    @if($findPerson->isEmpty())
                       <p>Não existe pessoas cadastradas</p>
                    @else
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
                                @foreach ($findPerson as $person)
                                    <tr>
                                        <td>{{$person->nome}}</td>
                                        <td>{{$person->email}}</td>
                                        <td>{{$person->telefone}}</td>
                                            <td>
                                            <a href="#"><i class="fas fa-edit icon-edit"></i></a>
                                            <meta name='csrf-token' content="{{ csrf_token() }}"/>
                                            <a onclick="deletePerson('{{ route('deletar.pessoa') }}', {{ $person->id }})"><i class="fas fa-trash icon-delete"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </main>
        </div>
    </div>

    @yield('scripts')
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>
