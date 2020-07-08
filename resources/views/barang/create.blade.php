@extends('template')

@section('main')
    <div id="barang">
        <h2>Tambah Barang</h2>

        {!! Form::open(['url' => 'barang', 'files' => true]) !!}
        @include('barang.form', ['submitButtonText' => 'Tambah Barang'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop
