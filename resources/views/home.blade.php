@extends('templates.page')
@section('title', 'Home')

@section('content')
    <div class="container bg-dark text-light">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card text-dark">
                    <div class="card-header text-center">
                        <h1>Cadastro</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email@exemplo.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="********">
                            </div>
                            <button type="submit" class="btn btn-primary" id="form-button" style="width: 100%">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
