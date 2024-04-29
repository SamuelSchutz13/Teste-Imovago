<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Pessoa</title>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body>    
    <header class="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">Sistema de Edição de Pessoas</a>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <main class="col">
                <div class="section-header">
                    <h1>Edição de Pessoas</h1>
                </div>
                <form class="form" method="POST" action="{{ route('atualizar.pessoa', $findPerson->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nome Completo</label>
                        <input type="text" name="nome" value="{{ isset($findPerson->nome) ? $findPerson->nome : old('nome') }}" placeholder="Informe o nome completo" @error('nome') is-invalid @enderror"/>
                        @if($errors->has('nome'))
                            <div class="invalid-feedback">
                                {{ $errors->first('nome') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email" value="{{ isset($findPerson->email) ? $findPerson->email : old('email') }}" placeholder="Informe o email"  @error('email') is-invalid @enderror"/>
                          @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" name="cpf" value="{{ isset($findPerson->cpf) ? $findPerson->cpf : old('cpf') }}" placeholder="Informe o CPF" @error('cpf') is-invalid @enderror"/>
                          @if($errors->has('cpf'))
                            <div class="invalid-feedback">
                                {{ $errors->first('cpf') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" name="telefone" value="{{ isset($findPerson->telefone) ? $findPerson->telefone : old('telefone') }}" placeholder="Informe o telefone"  @error('telefone') is-invalid @enderror"/>
                        @if($errors->has('telefone'))
                            <div class="invalid-feedback">
                                {{ $errors->first('telefone') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea name="descricao">
                            {{ isset($findPerson->descricao) ? $findPerson->descricao : old('descricao') }}
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-cadastro">Salvar</button>
                </form>
            </main>
        </div>
    </div>
    @yield('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>
