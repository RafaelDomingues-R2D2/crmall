@extends('layouts.app')
@section('content')
    <h1>Editar Cliente</h1>
    <form action="{{route('clientes.update', ['cliente' => $cliente->id])}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" value="{{$cliente->nome}}">
            @error('nome')
                <div class="invalid-feesback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Data de Nascimento</label>
            <input type="date" name="dataDeNascimento" class="form-control @error('dataDeNascimento') is-invalid @enderror" value="{{$cliente->dataDeNascimento}}">
            @error('dataDeNascimento')
                <div class="invalid-feesback">
                    {{$message}}
                </div>
            @enderror
        </div>
        {{-- <div class="form-group">
            <label>Sexo</label>
            <input type="text" name="sexo" class="form-control @error('sexo') is-invalid @enderror" value="{{$cliente->sexo}}">
            @error('sexo')
                <div class="invalid-feesback">
                    {{$message}}
                </div>
            @enderror
        </div> --}}
        {{-- <div class="form-group">
            <label>Sexo</label><br>
            <input type="radio" name="sexo" value="M">
            <label>Masculino</label><br>
            <input type="radio" name="sexo" value="F">
            <label>Femenino</label><br>
        </div> --}}
        <div class="form-group">
            <label>Sexo</label>
             <select name="sexo" class="form-control">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
             </select>
         </div>
        <div class="form-group">
            <label>CEP</label>
            <input type="text" name="cep" class="form-control" value="{{$cliente->cep}}">
        </div>
        <div class="form-group">
            <label>Endereço</label>
            <input type="text" name="endereco" class="form-control" value="{{$cliente->endereco}}">
        </div>
        <div class="form-group">
            <label>Número</label>
            <input type="text" name="numero" class="form-control" value="{{$cliente->numero}}">
        </div>
        <div class="form-group">
            <label>Complemento</label>
            <input type="text" name="complemento" class="form-control" value="{{$cliente->complemento}}">
        </div>
        <div class="form-group">
            <label>Bairro</label>
            <input type="text" name="bairro" class="form-control" value="{{$cliente->bairro}}">
        </div>
        <div class="form-group">
            <label>Estado</label>
            <input type="text" name="estado" class="form-control" value="{{$cliente->estado}}">
        </div>
        <div class="form-group">
            <label>Cidade</label>
            <input type="text" name="cidade" class="form-control" value="{{$cliente->cidade}}">
        </div>
        <div>
            <button type="submit" class="btn btn-lg btn-success">Editar Cliente</button>
        </div>
    </form>
@endsection
