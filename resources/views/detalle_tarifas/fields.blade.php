
<div style="text-align:center;font-size:18px">{{ $tarifas->descripcion }}</div><br>

<input type="hidden" name="tarifas_id" value="{{ $tarifas->id }}">
<!-- Descripcion Field -->
<!-- Minutosinicio Field -->
<div class="form-group col-sm-3">
    {!! Form::label('minutosinicio', 'Minutosinicio:') !!}
    {!! Form::number('minutosinicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Minutosfinal Field -->
<div class="form-group col-sm-3">
    {!! Form::label('minutosfinal', 'Minutosfinal:') !!}
    {!! Form::number('minutosfinal', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-3">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::text('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Valorrecargo Field -->
<div class="form-group col-sm-3">
    {!! Form::label('valorrecargo', 'Valorrecargo:') !!}
    {!! Form::text('valorrecargo', null, ['class' => 'form-control']) !!}
</div>


