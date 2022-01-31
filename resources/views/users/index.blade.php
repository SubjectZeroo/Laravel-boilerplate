@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    {{ $dataTable->table() }}
@stop

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
