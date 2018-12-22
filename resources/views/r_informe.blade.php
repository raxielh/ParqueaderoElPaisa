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

    <div class="container">
            <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Tipo vehiculo</th>
                        <th>Valor</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $suma=0;
                        @endphp
                         @foreach ($datos as $datos)
                      <tr>
                        <td>{{$datos->desctipovehiculo}}</td>
                        @php
                            $suma=$datos->valortotal+$suma;
                        @endphp
                        <td>{{number_format($datos->valortotal)}}</td>
                      </tr>
                      @endforeach
                      <tr>
                          <td><strong>Totral:</strong></td>
                      <td><strong>{{number_format($suma)}}</strong></td>
                      </tr>
                    </tbody>
            </table>
           
    </div>


   







</div>
@endsection
