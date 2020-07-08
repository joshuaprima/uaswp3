@extends('template')

@section('main')
    <div id="barang">
        <h2>Barang</h2>

        @include('_partial.flash_message')

        @include('barang.form_pencarian')

        @if (!empty($barang_list))
            <table class="table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Jumlah</th>
                    <th>Supplier</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 0; ?>
                @foreach($barang_list as $barang)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $barang->namabarang }}</td>
                        <td>{{ $barang->jenis->namajenis }}</td>
                        <td>{{ $barang->jumlah }}</td>
                        <td>{{ $barang->supplier->namasupplier }}</td>
                        <td>
                            <div class="box-button">
                                {{ link_to('barang/' . $barang->idbarang, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
                            </div>

                            @if (Auth::check())
                                <div class="box-button">
                                    {{ link_to('barang/' . $barang->idbarang . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
                                </div>
                                <div class="box-button">
                                    {!! Form::open(['method' => 'DELETE', 'action' => ['SiswaController@destroy', $barang->idbarang]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </div>
                            @endif

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>Tidak ada data barang.</p>
        @endif

        <div class="table-nav">
            <div class="jumlah-data">
                <strong> Jumlah Barang: {{ $jumlah_barang }} </strong>
            </div>
            <div class="paging">
                {{ $barang_list->links() }}
            </div>
        </div>

        @if (Auth::check())
            <div class="tombol-nav">
                <a href="{{ url('barang/create') }}" class="btn btn-primary">Tambah Barang</a>
            </div>
        @endif

    </div>
@stop


@section('footer')
    @include('footer')
@stop
