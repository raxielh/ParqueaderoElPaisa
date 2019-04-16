<div style="text-align:center;font-size:18px">{{ $tarifas->descripcion }}</div><br>
<input type="hidden" name="tarifas_id" value="{{ $tarifas->id }}">
<!-- Descripcion Field -->
<div class="form-group col-sm-4">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Minutosinicio Field -->
<div class="form-group col-sm-2">
    {!! Form::label('minutosinicio', 'Minutosinicio:') !!}
    {!! Form::number('minutosinicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Minutosfinal Field -->
<div class="form-group col-sm-2">
    {!! Form::label('minutosfinal', 'Minutosfinal:') !!}
    {!! Form::number('minutosfinal', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-2">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::text('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Valorrecargo Field -->
<div class="form-group col-sm-2">
    {!! Form::label('valorrecargo', 'Valorrecargo:') !!}
    {!! Form::text('valorrecargo', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-6" style="margin-top:1.8em">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tarifas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
