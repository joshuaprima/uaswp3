<div id="pencarian">
    {!! Form::open(['url' => 'barang/cari', 'method' => 'GET', 'idbarang' => 'form-pencarian']) !!}
    <div class="row">
        <div class="col-md-8">
            <div class="input-group">
                {!! Form:: text('kata_kunci', (! empty($kata_kunci)) ? $kata_kunci : null,['class' => 'form-control', 'placeholder' => 'Masukkan Nama Barang']) !!}
                <span class="input-group-btn">
            {!! Form::button('Cari', ['class' => 'btn btn-default', 'type' => 'submit']) !!}
            </span>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
