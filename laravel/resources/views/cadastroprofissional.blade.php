@extends('layouts.main')

@section('title', 'Cadastro Profissional')

@section('content')

<header id=hd-cadastroprofissional><h1>Cadastro Profissional</h1></header>
<form class="row g-5" action="" id="form_cadastroprofissional">
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="nome_profissional" placeholder="Nome" required>
    </div>
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="funcao" placeholder="Função" required>
    </div>
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="especializacao" placeholder="Especializaçao" required>
    </div>
    <div class="col-md-6">
        <br/>
        <input type="text" class="form-control" id="id" placeholder="ID" required>
    </div>
    <div class="col-12">
        <br/>
        <button type="submit" class="btn btn-primary" id="btn_cadastropet">Cadastrar</button>
    </div>
</form>

@endsection


