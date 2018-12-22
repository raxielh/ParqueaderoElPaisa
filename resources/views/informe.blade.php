@extends('layouts.app')

@section('content')

<div class="row">
    {!! Form::open(['route' => 'r_informe']) !!}
    <div class="col-md-12" style="padding:2em">
    <div class="col-md-5"><input type="date" value="{{date('Y-m-d')}}" name="fi" class="form-control"></div>
    <div class="col-md-5"><input type="date" value="{{date('Y-m-d')}}" name="ff"  class="form-control"></div>
    <div class="col-md-2"><input type="submit" value="Mostrar" class="btn btn-success form-control"></div>
    </div>
    {!! Form::close() !!}




   







</div>
@endsection
