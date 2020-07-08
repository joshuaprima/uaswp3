@extends('template')

@section('main')
    <div id="barang">
        <h2>Edit Barang</h2>

        {!! Form::model($barang, ['method' => 'PATCH', 'files' => true, 'action' => ['BarangController@update', $barang->idbarang]]) !!}
        @include('barang.form', ['submitButtonText' => 'Update Barang'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop
