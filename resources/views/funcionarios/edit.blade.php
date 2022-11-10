@extends('layouts.default')

@section('title', 'Alterar Funcionário')

@section('conteudo')
    <div class="container-fluid shadow bg-white p-4">
        <h1>Alterar Funcionário</h1>
        <form class="row g-4" method="post" action="{{ route('funcionarios.update', $funcionario->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" value="1" name="id_user">
        <div class="row mt-5 mb-4">
            <div class="col">
                <div>
                    <label for="nome" class="form-label">Nome</label>
                    <input id="nome" name="nome" value="{{ $funcionario->nome }}" type="text" name="nome" class="form-control form-control-lg bg-light" value="" required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="nome" class="form-label">Data de Nascimento</label>
                    <input type="date" name="data_nasc" value="{{ $funcionario->data_nasc }}" class="form-control form-control-lg bg-light" value=""
                        required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="sexo" class="form-label fw-bold">Sexo</label>
                    <select name="sexo" class="form-select form-select-lg bg-light" required>
                        <option value="">--</option>
                        <option value="m" @selected($funcionario->sexo == 'm')>Masculino</option>
                        <option value="f" @selected($funcionario->sexo == 'f')>Feminino</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div>
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" name="cpf" value="{{ $funcionario->cpf }}" class="form-control form-control-lg bg-light" value=""
                        required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="nome" class="form-label">E-mail</label>
                    <input type="text" name="email" value="{{ $funcionario->email }}" class="form-control form-control-lg bg-light" value=""
                        required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="cpf" class="form-label">Telefone</label>
                    <input type="text" name="telefone" value="{{ $funcionario->telefone }}" class="form-control form-control-lg bg-light" value=""
                    placeholder="(DDD) XXXXX-XXXX"    required>
                </div>
            </div>
        </div>

        <div class="row mb-4 col">
            <div class="col">
                <div>
                    <label for="cpf" class="form-label">Departamento</label>
                    <select id="id_departamento" name="id_departamento" class="form-select form-select-lg bg-light" value="" required>
                        <option value="">---</option>
                        @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}" @selected($departamento->id == $funcionario->id_departamento)>{{ $departamento->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="id_cargo" class="form-label">Cargo</label>
                    <select id="id_cargo" name="id_cargo" class="form-select form-select-lg bg-light" value="" required>
                        <option value="">---</option>
                        @foreach ($cargos as $cargo)
                        <option value="{{ $cargo->id }}" @selected($cargo->id == $funcionario->id_cargo)>{{ $cargo->descricao }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="cpf" class="form-label">Salário</label>
                    <input type="text" name="salario" value="{{ $funcionario->salario }}" class="form-control form-control-lg bg-light" value=""
                    placeholder="R$"    required>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <img src="/storage/funcionarios/{{ $funcionario->foto }}" class="img-thumbnail" alt="{{ $funcionario->nome }}">

        </div>

        <div class="col-md-10">
            <label for="foto" class="form-label fs-5">Foto</label>
            <input type="file" name="foto" class="form-control form-control-lg bg-light" id="foto">
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-lg">Alterar</button>

            <a href="{{ route('funcionarios.index') }}" class="btn btn-danger btn-lg">Cancelar</a>
        </div>
    </div>
</form>
    
@endsection
