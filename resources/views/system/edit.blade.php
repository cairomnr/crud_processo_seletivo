@extends('layouts.main')

@section('title', 'Inserir Sistemas')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        Manter Sistema
        <span class="text-danger pull-right">Campos Obrigatório</span><span class="required pull-right">*</span>
    </div>

    @include('partials.alerts.errors')

    <form action="{{ url('/system', $system->id) }}" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="panel-body">
            <h5 class="text-center"><b>Dados do Sistema</b></h5>
            <div class="form-group">
                <label for="description" class="col-xs-2 col-xs-offset-2 control-label">
                    Descrição
                    <span class="required">*</span>
                </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="description" id="description" value="{{ $system->description }}" maxlength="100" >
                </div>
            </div>
            <div class="form-group">
                <label for="initials" class="col-xs-2 col-xs-offset-2 control-label">
                    Sigla
                    <span class="required">*</span>
                </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="initials" id="initials" value="{{ $system->initials }}" maxlength="10">
                </div>
            </div>
            <div class="form-group">
                <label for="email_support" class="col-xs-2 col-xs-offset-2 control-label">
                    Email de atendimento do sistema
                </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="email_support" id="email_support" value="{{ $system->email_support }}" maxlength="100">
                </div>
            </div>
            <div class="form-group">
                <label for="url" class="col-xs-2 col-xs-offset-2 control-label">
                    URL
                </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="url" id="url" value="{{ $system->url }}" maxlength="50" >
                </div>
            </div>

            <h5 class="text-center"><b>Controle do Sistema</b></h5>
            <div class="form-group">
                <label for="description" class="col-xs-2 col-xs-offset-2 control-label">
                    Status
                    <span class="required">*</span>
                </label>
                <div class="col-xs-6">
                    <select class="form-control" name="status">
                        <option value="0" @if($system->status == 0) selected @endif>Ativo</option>
                        <option value="1" @if($system->status == 1) selected @endif>Cancelado</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-xs-2 col-xs-offset-2 control-label">
                    Usuário responsável pela última alteração
                </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" maxlength="100" value="{{ $user->name }}" disabled >
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-xs-2 col-xs-offset-2 control-label">
                    Data da última alteração
                </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" value="{{ $system->updated_at->format('d/m/y H:i:s') }}" disabled >
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-xs-2 col-xs-offset-2 control-label">
                    Justificativa da última alteração
                </label>
                <div class="col-xs-6">
                    <textarea class="form-control" disabled>{{ $system->justification_update }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-xs-2 col-xs-offset-2 control-label">
                    Nova justificativa de alteração
                    <span class="required">*</span>
                </label>
                <div class="col-xs-6">
                    <textarea class="form-control" name="justification_update" id="justification_update" maxlength="500"></textarea>
                </div>
            </div>
        </div>

        <div class="panel-footer">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-2">
                    <a href="{{ url('system') }}" class="btn btn-danger">
                        Voltar
                    </a>
                </div>
                

                <div class="col-xs-4">
                    <button type="submit" class="btn btn-success pull-right">
                        Salvar
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>

    </form>
</div>

@stop