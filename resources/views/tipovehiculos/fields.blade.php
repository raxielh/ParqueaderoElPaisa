<!-- Desctipovehiculo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desctipovehiculo', 'Desctipovehiculo:') !!}
    {!! Form::text('desctipovehiculo', null, ['class' => 'form-control']) !!}
</div>

<!-- Idtarifatipoveiculo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idtarifatipoveiculo', 'Idtarifatipoveiculo:') !!}
    {!! Form::select('idtarifatipoveiculo', $Tarifatipoveiculo, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipovehiculos.index') !!}" class="btn btn-default">Cancel</a>
</div>