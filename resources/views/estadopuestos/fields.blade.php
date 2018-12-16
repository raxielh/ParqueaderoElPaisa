<!-- Descestadopuesto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descestadopuesto', 'Descestadopuesto:') !!}
    {!! Form::text('descestadopuesto', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('estadopuestos.index') !!}" class="btn btn-default">Cancel</a>
</div>
