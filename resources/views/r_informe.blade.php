@extends('layouts.app')

@section('content')
<style>
.active {
    background-color: #ebf0f4;
}
</style>
<div class="row">
    {!! Form::open(['route' => 'r_informe']) !!}
    <div class="col-md-12" style="padding:2em">
    <div class="col-md-5"><input type="date" value="{{date('Y-m-d')}}" name="fi" class="form-control"></div>
    <div class="col-md-5"><input type="date" value="{{date('Y-m-d')}}" name="ff"  class="form-control"></div>
    <div class="col-md-2"><input type="submit" value="Mostrar" class="btn btn-success form-control"></div>
    </div>
    {!! Form::close() !!}

    <div class="container">

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Consolidado</a></li>
            <li><a data-toggle="tab" href="#menu1">Detalle</a></li>
        </ul>
                  
        <div class="tab-content">
                    
            <div id="home" class="tab-pane fade in active">
                    <table class="table table-striped">
                            <thead>
                              <tr>
                                    <th>Fecha</th>
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
                                 
                                
                                    <td>{{$datos->fechas}}</td>
                                <td>{{$datos->desctipovehiculo}}</td>
                                @php
                                    $suma=$datos->valortotal+$suma;
                                @endphp
                                <td>{{number_format($datos->valortotal)}}</td>
                              </tr>
                              @endforeach
                              <tr><td></td>
                                  <td><strong>Total:</strong></td>
                              <td><strong>{{number_format($suma)}}</strong></td>
                              </tr>
                            </tbody>
                    </table>
            </div>
            
            <div id="menu1" class="tab-pane fade">
                    <table class="table table-striped">
                            <thead>
                              <tr>
                                    <th>Fecha</th>
                                <th>Tipo vehiculo</th>
                                <th>Valor</th>
                                <th>Tiempo</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php
                                    $suma2=0;
                                @endphp
                                 @foreach ($datos2 as $datos2)
                              <tr>
                                    
                                    <td>{{$datos2->fecha}}</td>
                                <td>{{$datos2->desctipovehiculo}}</td>
                                @php
                                    $suma2=$datos2->valortotal+$suma2;
                                @endphp
                                 <td>{{number_format($datos2->valortotal)}}</td>
                                <td>{{($datos2->numerohoras)}}</td>
                               
                              </tr>
                              @endforeach
                              <tr>
                                 
                                  <td></td>
                                  
                                  <td><strong>Total:</strong></td>
                              <td><strong>{{number_format($suma2)}}</strong></td>
                              <td></td>
                              </tr>
                            </tbody>
                    </table>
            </div>
        
        </div>







           
    </div>


   







</div>
@endsection
