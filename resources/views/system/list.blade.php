@extends('layouts.main')

@section('title', 'Pesquisa de Sistemas')

@section('content')

@include('partials.alerts.success')

<div class="panel panel-default">
    <div class="panel-heading">
        Pesquisar Sistema
    </div>

    <form action="{{ url('/system/search') }}" method="get" class="form-horizontal">
        <input type="hidden" name="action" value="1">
        <div class="panel-body">

            <div class="form-group">
                <label for="description" class="col-xs-2 col-xs-offset-2 control-label">Descrição: </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="description" id="description" maxlength="100" >
                </div>
            </div>
            <div class="form-group">
                <label for="initials" class="col-xs-2 col-xs-offset-2 control-label">Sigla: </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="initials" id="initials" maxlength="10">
                </div>
            </div>
            <div class="form-group">
                <label for="email_support" class="col-xs-2 col-xs-offset-2 control-label">Email Atendimento: </label>
                <div class="col-xs-6">
                    <input type="email" class="form-control" name="email_support" id="email_support" maxlength="100">
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="row" style="text-align: center;">
                <div class="col-md-2 col-md-offset-3">
                    <button type="submit" class="btn btn-default">
                        Pesquisar 
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-md-2">
                    <a href="{{ url('system') }}" class="btn btn-default">
                        Limpar 
                        <i class="fa fa-minus" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="{{ url('system/create') }}" class="btn btn-default">
                        Novo Sistema 
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>

@if($action == 1)
    @if(count($systems) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Sigla</th>
                    <th>E-mail de atendimento</th>
                    <th>URL</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($systems as $i => $system)
                    <tr>
                        <td>{{ $system->description }}</td>
                        <td>{{ $system->initials }}</td>
                        <td>{{ $system->email_support }}</td>
                        <td>{{ $system->url }}</td>
                        <td>
                            @if($system->status == 0) 
                                Ativo
                            @else
                                Cancelado
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('system/edit', $system->id) }}" class="btn btn-primary btn-sm">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="text-center">
            {{ $systems->links('vendor.pagination.default') }}
        </div>
    @else
        @include('partials.alerts.notFoundData')
    @endif
@endif


@stop