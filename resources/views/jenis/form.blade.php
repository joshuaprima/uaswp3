@if (isset($jenis))
    {!! Form::hidden('idjenis', $jenis->idjenis) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('namajenis') ? 'has-error' : 'has-success' }}">
        @else
            <div class="form-group">
                @endif
                {!! Form::label('namajenis', 'Nama Jenis Barang:', ['class' => 'control-label']) !!}
                {!! Form::text('namajenis', null, ['class' => 'form-control']) !!}
                @if ($errors->has('namajenis'))
                    <span class="help-block">{{ $errors->first('namajenis') }}</span>
                @endif
            </div>

            <div class="form-group">
                {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
            </div>
    </div>
