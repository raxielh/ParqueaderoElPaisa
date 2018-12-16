@extends('layouts.app')

@section('content')
<div class="row">
    
    <div class="col-md-12">
        @include('flash::message')
    </div>
    
    
    <div class="col-md-12" style="padding:2em;">

        <a href="{!! route('lugares',[1]) !!}">
        <div class="col-md-4 col-sm-4 col-xs-4">
            <div style="-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            background-color: #fff;
            padding: 2em;
            border-radius: 2em;
            ">
                <img src="{{URL::asset('img/carro.png')}}" width="100%"/>
            </div>           
        </div>
        </a>

        <a href="{!! route('lugares',[2]) !!}">
        <div class="col-md-4 col-sm-4 col-xs-4">
            <div style="-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                background-color: #fff;
                padding: 2em;
                border-radius: 2em;
                ">
                <img src="{{URL::asset('img/moto.png')}}" width="100%"/>
            </div>
        </div>
        </a>

        <a href="{!! route('lugares',[3]) !!}">
        <div class="col-md-4 col-sm-4 col-xs-4">
            <div style="-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                background-color: #fff;
                padding: 2em;
                border-radius: 2em;
                ">
                <img src="{{URL::asset('img/bici.png')}}" width="100%"/>
            </div>
        </div>
        </a>

    </div>
</div>
@endsection
