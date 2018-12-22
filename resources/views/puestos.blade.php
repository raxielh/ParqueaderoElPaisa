@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12" style="padding:2em;">
        
        @foreach ($puestos as $puesto)
        <div class="col-md-2 col-xs-2 col-sm-2" data-toggle="modal" data-target="#m-{{$puesto->id}}">
            <div style="

            
            @if ($puesto->idestado === 1)
            background-color: green;
            @else
            background-color: red;
            @endif

            border-radius:0.2em;-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            font-weight: bold;
            color:#fff;
            font-size: 80px;
            text-align: center;
            margin:15px;
            cursor:pointer;
            ">
            {{$puesto->numero}}
            </div>
        </div>

        @if ($puesto->idestado === 1)
        <div class="modal fade" id="m-{{$puesto->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="z-index:999999">
            <div class="modal-dialog" style="z-index:999999">
                <div class="modal-content">
                    <div class="modal-body" style="min-height: 200px;">
                        {!! Form::open(['route' => 'parqueo']) !!}

                            <div class="form-group col-sm-12 col-xs-12">
                                {!! Form::label('placa', 'Placa:') !!}
                                {!! Form::text('placa', null, ['class' => 'form-control','placeholder' => 'IUQ 824']) !!}

                            </div>
                            <input type="hidden" value="{{$puesto->id}}" name="puesto">

                            <div class="form-group col-sm-12 col-xs-12">
                                <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                                    <a href="#" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar</a>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                                    {!! Form::submit('Guardar', ['class' => 'btn btn-success btn-lg']) !!}
                                </div>    
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="modal fade" id="m-{{$puesto->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="z-index:999999">
                <div class="modal-dialog" style="z-index:999999">
                    <div class="modal-content">
                        <div class="modal-body" style="min-height: 150px;">
                            <div class="form-group col-sm-12 col-xs-12" style="margin-top:10px">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    {!! Form::open(['route' => 'cobrar']) !!}


                                <input type="text" name="placa" value="" id="placa-{{$puesto->id}}" class="form-control" placeholder="Placa Vehiculo"><br>

                                <input type="hidden" value="{{$puesto->id}}" name="puesto">
                                <input type="hidden" value="" name="parqueo" id="parqueo-{{$puesto->id}}">

                                    {!! Form::submit('Cobrar', ['class' => 'btn btn-success btn-lg']) !!}

                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(function() {
                    var url='/buscar_placa/{{$puesto->id}}';
                    $.getJSON(url, function( json ) {
                        $.each( json, function( key, val ) {
                            $('#placa-{{$puesto->id}}').val($.trim(val.placavehiculo));
                            $('#parqueo-{{$puesto->id}}').val($.trim(val.id));
                        }); 
                    });
                });
            </script>
        @endif



        @endforeach
  
    </div>
</div>
@endsection
