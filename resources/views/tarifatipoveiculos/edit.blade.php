@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
                Tarifa tipo vehiculo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tarifatipoveiculo, ['route' => ['tarifatipoveiculos.update', $tarifatipoveiculo->id], 'method' => 'patch']) !!}

                        @include('tarifatipoveiculos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection