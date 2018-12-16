<!-- Idestado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idestado', 'Estado:') !!}
    {!! Form::select('idestado',$Estadopuesto, null, ['class' => 'form-control']) !!}
</div>

<!-- Idtipovehiculo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idtipovehiculo', 'Tipo vehiculo:') !!}
    {!! Form::select('idtipovehiculo',$Tipovehiculo, null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::number('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('puestos.index') !!}" class="btn btn-default">Cancel</a>
</div>
