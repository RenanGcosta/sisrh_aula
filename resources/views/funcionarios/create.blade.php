@extends('layouts.default')

@section('title', 'Cadastrar Funcionário')

@section('conteudo')
    <div class="container-fluid shadow bg-white p-4">
        <h1>Cadastrar Funcionário</h1>
        <div class="row mt-5 mb-4">
            <div class="col">
                <div>
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control form-control-lg bg-light" value="" required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="nome" class="form-label">Data de Nascimento</label>
                    <input type="date" name="datanasc" class="form-control form-control-lg bg-light" value=""
                        required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="sexo" class="form-label fw-bold">Sexo</label>
                    <select name="sexo" id="sexo" class="form-select form-select-lg bg-light" required>
                        <option value="">--</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div>
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" name="cpf" class="form-control form-control-lg bg-light" value=""
                        required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="nome" class="form-label">E-mail</label>
                    <input type="text" name="email" class="form-control form-control-lg bg-light" value=""
                        required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="cpf" class="form-label">Telefone</label>
                    <input type="text" name="telefone" class="form-control form-control-lg bg-light" value=""
                    placeholder="(DDD) XXXXX-XXXX"    required>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div>
                    <label for="cpf" class="form-label">Departamento</label>
                    <input type="text" name="departamento" class="form-select form-select-lg bg-light" value=""
                        required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="nome" class="form-label">Cargo</label>
                    <input type="text" name="cargo" class="form-select form-select-lg bg-light" value=""
                        required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="cpf" class="form-label">Salário</label>
                    <input type="text" name="salario" class="form-control form-control-lg bg-light" value=""
                    placeholder="R$"    required>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Foto</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div>
            <button type="button" class="btn btn-primary">Cadastrar</button>
            <button type="button" class="btn btn-danger">Cancelar</button>
        </div>
    </div>
@endsection
