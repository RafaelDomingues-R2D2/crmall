@extends('layouts.app')
@section('content')
    <h1>Adicionar Cliente</h1>
    <form action="{{route('store')}}" method="post">
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
             <select name="sexo" class="form-control">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
             </select>
         </div>
        <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" name="cep" id="cep" class="form-control" value="{{old('cep')}}">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" class="form-control" value="{{old('endereco')}}">
        </div>
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="text" name="numero" id="numero" class="form-control" value="{{old('numero')}}">
        </div>
        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" id="complemento" class="form-control" value="{{old('complemento')}}">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro" class="form-control" value="{{old('bairro')}}">
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" class="form-control" value="{{old('estado')}}">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade" class="form-control" value="{{old('cidade')}}">
        </div>
        <footer class="container">
            <p class="float-left">
                <button type="submit" class="btn btn-lg btn-success">Adicionar Cliente</button>
            </p>
           <p class="float-right">
                <a href="{{route('index')}}" class="btn btn-lg btn-primary">Voltar</a>
           </p>
        </footer>
    </form>
@endsection
