@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tarifas
        </h1>
    </section>
    <div class="content">

        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">

                {!! Form::open(['route' => 'detalleTarifas.store']) !!}

@include('detalle_tarifas.fields')
<div class="form-group col-sm-6" style="margin-top:1.8em">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tarifas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
{!! Form::close() !!}

<table class="table table-responsive" id="detalleTarifas-table">
    <thead>
        <tr>
        <th>Minutosinicio</th>
        <th>Minutosfinal</th>
        <th>Valor</th>
        <th>Valorrecargo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($detalleTarifas as $detalleTarifa)
        <tr>
            <td>{!! $detalleTarifa->minutosinicio !!}</td>
            <td>{!! $detalleTarifa->minutosfinal !!}</td>
            <td>{!! $detalleTarifa->valor !!}</td>
            <td>{!! $detalleTarifa->valorrecargo !!}</td>
            <td>
                {!! Form::open(['route' => ['detalleTarifas.destroy', $detalleTarifa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('detalleTarifas.edit', [$detalleTarifa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>






                </div>
            </div>
        </div>
    </div>
@endsection
