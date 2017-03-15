@extends('layouts.main')

@section('title', 'Inserir Sistemas')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        Manter Sistema
        <span class="text-danger pull-right">Campos Obrigatório</span><span class="required pull-right">*</span> 
    </div>

    @include('partials.alerts.errors')

    <form action="{{ url('/system') }}" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="panel-body">
            <div class="form-group">
                <label for="description" class="col-xs-2 col-xs-offset-2 control-label">
                    Descrição
                    <span class="required">*</span>
                </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="description" id="description" maxlength="100" >
                </div>
            </div>
            <div class="form-group">
                <label for="initials" class="col-xs-2 col-xs-offset-2 control-label">
                    Sigla
                    <span class="required">*</span>
                </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="initials" id="initials" maxlength="10">
                </div>
            </div>
            <div class="form-group">
                <label for="email_support" class="col-xs-2 col-xs-offset-2 control-label">
                    Email de Atendimento do sistema
                </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="email_support" id="email_support" maxlength="100">
                </div>
            </div>
            <div class="form-group">
                <label for="url" class="col-xs-2 col-xs-offset-2 control-label">
                    URL
                </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="url" id="url" maxlength="50" >
                </div>
            </div>
        </div>

        <div class="panel-footer">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-2">
                    <a href="{{ url('system') }}" class="btn btn-default">
                        <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
                        Voltar
                    </a>
                </div>
                

                <div class="col-xs-4">
                    <button type="submit" class="btn btn-default pull-right">
                        Salvar
                        <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>

    </form>
</div>

@stop