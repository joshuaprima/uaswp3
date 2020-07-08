@extends('template')

@section('main')
    <div id="barang">
        <h2>Detail Barang</h2>

        <table class="table table-striped">
            <tr>
                <th>Nama Barang</th>
                <td>{{ $barang->namabarang }}</td>
            </tr>
            <tr>
                <th>Jenis Barang</th>
                <td>{{ $barang->jenis->namajenis }}</td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td>{{ $barang->jumlah }}</td>
            </tr>
            <tr>
                <th>Supplier</th>
                <td>{{ $barang->supplier->namasupplier }}</td>
            </tr>
            <tr>
                <th>Foto</th>
                <td>
                    @if (isset($barang->foto))
                        <img src="{{ asset('fotoupload/' . $barang->foto) }}">
                    @else
                            <img src="{{ asset('fotoupload/dummymale.jpg') }}">
                    @endif
                </td>
            </tr>
        </table>
    </div>
@stop

@section('footer')
    @include('footer')
@stop
