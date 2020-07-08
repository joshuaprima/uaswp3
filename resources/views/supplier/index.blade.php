@extends('template')

@section('main')
    <div id="supplier">
        <h2>Supplier</h2>

        @include('_partial.flash_message')

        @if (count($supp_list) > 0)
            <table class="table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Supplier</th>
                    <th>Kota</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 0; ?>
                <?php foreach($supp_list as $supplier): ?>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $supplier->namasupplier }}</td>
                    <td>{{ $supplier->kota }}</td>
                    <td>
                        <div class="box-button">
                            {{ link_to('supplier/' . $supplier->idsupplier . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
                        </div>
                        <div class="box-button">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['SupplierController@destroy', $supplier->idsupplier]]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        @else
            <p>Tidak ada data supplier.</p>
        @endif

        <div class="tombol-nav">
            <a href="supplier/create" class="btn btn-primary">Tambah Supplier</a>
        </div>

    </div>
@stop

@section('footer')
    @include('footer')
@stop
