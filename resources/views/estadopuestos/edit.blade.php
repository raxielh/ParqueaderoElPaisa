@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Estado puesto
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($estadopuesto, ['route' => ['estadopuestos.update', $estadopuesto->id], 'method' => 'patch']) !!}

                        @include('estadopuestos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection