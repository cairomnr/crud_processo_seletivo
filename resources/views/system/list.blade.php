@extends('layouts.main')

@section('title', 'Pesquisa de Sistemas')

@section('content')

@include('partials.alerts.errors')
@include('partials.alerts.success')
@include('partials.searchs.system')

@if(count($systems) > 0)
    <h4 class="text-center p-b-15"><b>Resultados da consulta</b></h4>
    <table class="table table-bordered">
        <thead>
            <tr class="bg-success">
                <th>Descrição</th>
                <th>Sigla</th>
                <th>E-mail de atendimento</th>
                <th>URL</th>
                <th>Status</th>
                <th class="text-center">Ações</th>
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
                    <td class="text-center">
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

@stop