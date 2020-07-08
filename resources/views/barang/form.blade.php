@if (isset($barang))
    {!! Form::hidden('id', $barang->idbarang) !!}
@endif


{{--<!-- NISN -->--}}
{{--@if ($errors->any())--}}
{{--    <div class="form-group {{ $errors->has('nisn') ? 'has-error' : 'has-success' }}">--}}
{{--        @else--}}
{{--            <div class="form-group">--}}
{{--                @endif--}}
{{--                {!! Form::label('nisn', 'NISN:', ['class' => 'control-label']) !!}--}}
{{--                {!! Form::text('nisn', null, ['class' => 'form-control']) !!}--}}
{{--                @if ($errors->has('nisn'))--}}
{{--                    <span class="help-block">{{ $errors->first('nisn') }}</span>--}}
{{--                @endif--}}
{{--            </div>--}}


            <!-- NAMA -->
            @if ($errors->any())
                <div class="form-group {{ $errors->has('namabarang') ? 'has-error' : 'has-success' }}">
                    @else
                        <div class="form-group">
                            @endif
                            {!! Form::label('namabarang', 'Nama Barang:', ['class' => 'control-label']) !!}
                            {!! Form::text('namabarang', null, ['class' => 'form-control']) !!}
                            @if ($errors->has('namabarang'))
                                <span class="help-block">{{ $errors->first('namabarang') }}</span>
                            @endif
                        </div>


{{--                        <!-- TANGGAL LAHIR -->--}}
{{--                        @if ($errors->any())--}}
{{--                            <div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : 'has-success' }}">--}}
{{--                                @else--}}
{{--                                    <div class="form-group">--}}
{{--                                        @endif--}}
{{--                                        {!! Form::label('tanggal_lahir', 'Tanggal Lahir:', ['class' => 'control-label']) !!}--}}
{{--                                        {!! Form::date('tanggal_lahir', !empty($siswa) ? $siswa->tanggal_lahir->format('Y-m-d'): null, ['class' => 'form-control', 'id' => 'tanggal_lahir']) !!}--}}
{{--                                        @if ($errors->has('tanggal_lahir'))--}}
{{--                                            <span class="help-block">{{ $errors->first('tanggal_lahir') }}</span>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}


                                    <!-- JENIS -->
                                    @if ($errors->any())
                                        <div class="form-group {{ $errors->has('idjenis') ? 'has-error' : 'has-success' }}">
                                            @else
                                                <div class="form-group">
                                                    @endif
                                                    {!! Form::label('idjenis', 'Jenis Barang:', ['class' => 'control-label']) !!}
                                                    @if(count($list_jenis) > 0)
                                                        {!! Form::select('idjenis', $list_jenis, null, ['class' => 'form-control', 'id' => 'idjenis', 'placeholder' => 'Pilih Jenis Barang']) !!}
                                                    @else
                                                        <p>Tidak ada pilihan jenis barang, silahkan menambahkan pada menu Jenis!</p>
                                                    @endif
                                                    @if ($errors->has('idjenis'))
                                                        <span class="help-block">{{ $errors->first('idjenis') }}</span>
                                                    @endif
                                                </div>


                                                <!-- JUMLAH -->
                                                @if ($errors->any())
                                                    <div class="form-group {{ $errors->has('jumlah') ? 'has-error' : 'has-success' }}">
                                                        @else
                                                            <div class="form-group">
                                                                @endif
                                                                {!! Form::label('jumlah', 'Jumlah Barang:', ['class' => 'control-label']) !!}
                                                                {!! Form::text('jumlah', null, ['class' => 'form-control']) !!}
                                                                @if ($errors->has('jumlah'))
                                                                    <span class="help-block">{{ $errors->first('jumlah') }}</span>
                                                                @endif
                                                            </div>


                                                            <!-- JENIS -->
                                                            @if ($errors->any())
                                                                <div class="form-group {{ $errors->has('idsupplier') ? 'has-error' : 'has-success' }}">
                                                                    @else
                                                                        <div class="form-group">
                                                                            @endif
                                                                            {!! Form::label('idsupplier', 'Supplier:', ['class' => 'control-label']) !!}
                                                                            @if(count($list_supp) > 0)
                                                                                {!! Form::select('idsupplier', $list_supp, null, ['class' => 'form-control', 'id' => 'idsupplier', 'placeholder' => 'Pilih Supplier']) !!}
                                                                            @else
                                                                                <p>Tidak ada pilihan supplier, silahkan menambahkan pada menu Supplier!</p>
                                                                            @endif
                                                                            @if ($errors->has('supplier'))
                                                                                <span class="help-block">{{ $errors->first('supplier') }}</span>
                                                                            @endif
                                                                        </div>


{{--                                                                        <!-- HOBI -->--}}
{{--                                                                        @if ($errors->any())--}}
{{--                                                                            <div class="form-group {{ $errors->has('hobi_siswa') ? 'has-error' : 'has-success' }}">--}}
{{--                                                                                @else--}}
{{--                                                                                    <div class="form-group">--}}
{{--                                                                                        @endif--}}
{{--                                                                                        {!! Form::label('hobi_siswa', 'Hobi:', ['class' => 'control-label']) !!}--}}
{{--                                                                                        @if(count($list_hobi) > 0)--}}
{{--                                                                                            @foreach($list_hobi as $key => $value)--}}
{{--                                                                                                <div class="checkbox">--}}
{{--                                                                                                    <label>{!! Form::checkbox('hobi_siswa[]', $key, null) !!} {{ $value }}</label>--}}
{{--                                                                                                </div>--}}
{{--                                                                                            @endforeach--}}
{{--                                                                                        @else--}}
{{--                                                                                            <p>Tidak ada pilihan hobi, buat dulu ya...!</p>--}}
{{--                                                                                        @endif--}}
{{--                                                                                    </div>--}}

                                                                                    <!-- FOTO -->
                                                                                    @if ($errors->any())
                                                                                        <div class="form-group {{ $errors->has('foto') ? 'has-error' : 'has-success' }}">
                                                                                            @else
                                                                                                <div class="form-group">
                                                                                                    @endif
                                                                                                    {!! Form::label('foto', 'Foto:') !!}
                                                                                                    {!! Form::file('foto') !!}
                                                                                                    @if ($errors->has('foto'))
                                                                                                        <span class="help-block">{{ $errors->first('foto') }}</span>
                                                                                                    @endif

                                                                                                <!-- MENAMPILKAN FOTO -->
                                                                                                    @if (isset($barang))
                                                                                                        @if (isset($barang->foto))
                                                                                                            <img src="{{ asset('fotoupload/' . $barang->foto) }}">
                                                                                                        @else
                                                                                                            <img src="{{ asset('fotoupload/dummymale.jpg') }}">
                                                                                                        @endif
                                                                                                    @endif
                                                                                                </div>

                                                                                                <!-- SUBMIT -->
                                                                                                <div class="form-group">
                                                                                                    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
                                                                                                </div>
