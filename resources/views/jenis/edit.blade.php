@extends('template')

@section('main')
    <div id="jenis">
        <h2>Edit Jenis Barang</h2>

        {!! Form::model($jenis, ['method' => 'PATCH', 'action' => ['JenisController@update', $jenis->idjenis]]) !!}
        @include('jenis.form', ['submitButtonText' => 'Update Jenis Barang'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop
