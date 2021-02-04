@extends('layouts.app')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Sexo</th>
                <th>CEP</th>
                <th>Endereço</th>
                <th>Número</th>
                <th>Complemento</th>
                <th>Bairro</th>
                <th>Estado</th>
                <th>Cidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->dataDeNascimento}}</td>
                    <td>{{$cliente->sexo}}</td>
                    <td>{{$cliente->cep}}</td>
                    <td>{{$cliente->endereco}}</td>
                    <td>{{$cliente->numero}}</td>
                    <td>{{$cliente->complemento}}</td>
                    <td>{{$cliente->bairro}}</td>
                    <td>{{$cliente->estado}}</td>
                    <td>{{$cliente->cidade}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('edit', ['cliente' => $cliente->id])}}" class="btn btn-sm btn-primary">EDITAR</a>
                            <form action="{{route('destroy', ['cliente' => $cliente->id])}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-sm btn-danger">REMOVER</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('create')}}" class="btn btn-success">Adicionar Cliente</a>
    {{$clientes->links()}}
@endsection
