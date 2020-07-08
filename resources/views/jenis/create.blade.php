@extends('template')

@section('main')
    <div id="jenis">
        <h2>Tambah Jenis Barang</h2>

        {!! Form::open(['url' => 'jenis']) !!}
        @include('jenis.form', ['submitButtonText' => 'Tambah Jenis Barang'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop
