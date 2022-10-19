@extends('layouts.default')

@section('title', 'Departamentos')

@section('conteudo')
    <div class="container-fluid shadow bg-white p-4">
        <h1>Departamentos</h1>
        <a href="{{ route('departamentos.create') }}" class="btn btn-primary float-end mb-2 
        rounded-circle fs-4"><i
                class="bi bi-person-plus-fill"></i></a>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="align-middle"><button type="button" class="btn btn-success m-2">
                            <i class="bi bi-person"></i></button><button type="button" class="btn btn-primary m-2">
                            <i class="bi bi-pen"></i></button><button type="button" class="btn btn-danger m-2">
                            <i class="bi bi-trash3"></i></button></td>
                </tr>
            </tbody>
        </table>
    @endsection
