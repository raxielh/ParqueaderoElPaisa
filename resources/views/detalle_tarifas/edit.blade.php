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

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection