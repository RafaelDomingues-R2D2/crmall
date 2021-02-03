@extends('layouts.app')
@section('content')
    <h1>Adicionar Cliente</h1>
    <form action="{{route('clientes.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" value="{{old('nome')}}">
            @error('nome')
                <div class="invalid-feesback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Data de Nascimento</label>
            <input type="date" name="dataDeNascimento" class="form-control @error('dataDeNascimento') is-invalid @enderror" value="{{old('dataDeNascimento')}}">
            @error('dataDeNascimento')
                <div class="invalid-feesback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Sexo</label>
            <input type="text" name="sexo" class="form-control @error('sexo') is-invalid @enderror" value="{{old('sexo')}}">
            @error('sexo')
                <div class="invalid-feesback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>CEP</label>
            <input type="text" name="cep" class="form-control" value="{{old('cep')}}">
        </div>
        <div class="form-group">
            <label>Endereço</label>
            <input type="text" name="endereco" class="form-control" value="{{old('endereco')}}">
        </div>
        <div class="form-group">
            <label>Número</label>
            <input type="text" name="numero" class="form-control" value="{{old('numero')}}">
        </div>
        <div class="form-group">
            <label>Complemento</label>
            <input type="text" name="complemento" class="form-control" value="{{old('complemento')}}">
        </div>
        <div class="form-group">
            <label>Bairro</label>
            <input type="text" name="bairro" class="form-control" value="{{old('bairro')}}">
        </div>
        <div class="form-group">
            <label>Estado</label>
            <input type="text" name="estado" class="form-control" value="{{old('estado')}}">
        </div>
        <div class="form-group">
            <label>Cidade</label>
            <input type="text" name="cidade" class="form-control" value="{{old('cidade')}}">
        </div>
        <div>
            <button type="submit" class="btn btn-lg btn-success">Adicionar Cliente</button>
        </div>
    </form>
@endsection
