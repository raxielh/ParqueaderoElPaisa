<!-- Descripciontarifa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripciontarifa', 'Descripciontarifa:') !!}
    {!! Form::text('descripciontarifa', null, ['class' => 'form-control']) !!}
</div>

<!-- Numminutosinicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numminutosinicio', 'Numminutosinicio:') !!}
    {!! Form::number('numminutosinicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Valorinicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valorinicio', 'Valorinicio:') !!}
    {!! Form::text('valorinicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Numminutosfraccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numminutosfraccion', 'Numminutosfraccion:') !!}
    {!! Form::number('numminutosfraccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Valorfraccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valorfraccion', 'Valorfraccion:') !!}
    {!! Form::text('valorfraccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tarifatipoveiculos.index') !!}" class="btn btn-default">Cancel</a>
</div>
