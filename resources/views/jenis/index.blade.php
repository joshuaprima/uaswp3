@extends('template')

@section('main')
    <div id="jenis">
        <h2>Jenis Barang</h2>

        @include('_partial.flash_message')

        @if (count($jenis_list) > 0)
            <table class="table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Barang</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 0; ?>
                <?php foreach($jenis_list as $jenis): ?>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $jenis->namajenis }}</td>
                    <td>
                        <div class="box-button">
                            {{ link_to('jenis/' . $jenis->idjenis . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
                        </div>
                        <div class="box-button">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['JenisController@destroy', $jenis->idjenis]]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        @else
            <p>Tidak ada data jenis barang.</p>
        @endif

        <div class="tombol-nav">
            <a href="jenis/create" class="btn btn-primary">Tambah Jenis Barang</a>
        </div>

    </div>
@stop

@section('footer')
    @include('footer')
@stop
