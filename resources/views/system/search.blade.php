@extends('layouts.main')

@section('title', 'Pesquisa de Sistemas')

@section('content')

	@include('partials.alerts.errors')
    @include('partials.alerts.success')
    @include('partials.searchs.system')

@stop