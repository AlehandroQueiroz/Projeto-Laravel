@extends('layouts.default')

@section('title', 'Cargos')

@section('conteudo')
<div class="container-fluid shadow bg-white p-3">
    <h1 class="mb-4">Cargos</h1>
    <a href="{{route('cargos.create')}}" class="btn btn-primary position-absolute top-0 end-0 m-4
     rounded-circle fs-4"><i class="bi bi-person-plus-fill"></i></a>
     
    <table class="table table-striped">

        <p>Total de Cargos: ??</p>

        <form action="" method="get" class="mb-3 d-flex justify-content-end">
            <div class="input-group me-3">
                <input type="text" name="buscacargo" class="form-control form-control-lg" 
                placeholder="Descrição do Cargo">
    
                <button class="btn btn-primary" type="submit">Procurar</button>
            </div>
            <a href="" class="btn btn-light border btn-lg">Limpar</a>
        </form>
       
        <div class="table-responsive">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Nome</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cargos as $cargos)
                <tr class="text-center">
                <td class="align-middle">{{$cargos->id}}</td>
                <td class="align-middle">{{$cargos->descricao}}</td>
                <td class="align-middle"><button type="button" class="btn btn-success m-2"><i class="bi bi-person"></i></button><button type="button" class="btn btn-primary m-2"><i class="bi bi-pen"></i></button><button type="button" class="btn btn-danger m-2"><i class="bi bi-trash3" ></i></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection