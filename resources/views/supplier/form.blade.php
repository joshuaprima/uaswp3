@if (isset($supplier))
    {!! Form::hidden('id', $supplier->idsupplier) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('namasupplier') ? 'has-error' : 'has-success' }}">
        @else
            <div class="form-group">
                @endif
                {!! Form::label('namasupplier', 'Nama Supplier:', ['class' => 'control-label']) !!}
                {!! Form::text('namasupplier', null, ['class' => 'form-control']) !!}
                @if ($errors->has('namasupplier'))
                    <span class="help-block">{{ $errors->first('namasupplier') }}</span>
                @endif
                {!! Form::label('kota', 'Kota:', ['class' => 'control-label']) !!}
                {!! Form::text('kota', null, ['class' => 'form-control']) !!}
                @if ($errors->has('kota'))
                    <span class="help-block">{{ $errors->first('kota') }}</span>
                @endif
            </div>

            <div class="form-group">
                {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
            </div>
    </div>
