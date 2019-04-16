@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Detalle Tarifa
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($detalleTarifa, ['route' => ['detalleTarifas.update', $detalleTarifa->id], 'method' => 'patch']) !!}

                        @include('detalle_tarifas.fields')
                        <div class="form-group col-sm-6" style="margin-top:1.8em">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tarifas.show',$tarifas->id) !!}" class="btn btn-default">Cancelar</a>
</div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection