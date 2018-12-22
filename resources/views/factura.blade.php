@extends('layouts.app')

@section('content')
<style>
.ticket {
  position: relative;
  box-sizing: border-box;
  width: 300px;
  margin: 20px auto 0;
  padding: 20px;
  border-radius: 10px;
  background: #FBFBFB;
  
  &:before,
  &:after {
    content: '';
    position: absolute;
    left: 5px;
    height: 6px;
    width: 290px;
  }
  
  &:before {
    top: -5px;
    background: radial-gradient(circle, transparent, transparent 50%, #FBFBFB 50%, #FBFBFB 100% ) -7px -8px / 16px 16px repeat-x,
  }
  
  &:after {
    bottom: -5px;
    background: radial-gradient(circle, transparent, transparent 50%, #FBFBFB 50%, #FBFBFB 100% ) -7px -2px / 16px 16px repeat-x,
  }
}

.ticket__content {
  box-sizing: border-box;
  height: 100%;
  width: 100%;
  border: 2px solid #D8D8D8;
  padding: 0.5em;
}

.ticket__text {
  width: 400px;
  font-family: 'Helvetica', 'Arial', sans-serif;
  font-size: 3rem;
  font-weight: 900;
  text-transform: uppercase;
  color: #C6DEDE;
  transform: translate(-25px, 25px) rotate(-55deg) ;
}
@media print {
  .main-header,.main-sidebar,a{
    display: none
  }
  .ticket{
    width: 100%;
    padding: 0px;
  }
  .ticket__content{
    border: 0px;
  }
}
</style>
<style type="text/css" media="print">
  .main-header,.main-sidebar{
    display: none
  }
  .btn,.main-footer{
    display: none
  }
</style>
  
<div class="row">
    <div class="col-md-12" style="padding:2em;">
        <a href="/home" class="btn btn-info"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Atras</a>
        <a href="#" onclick="window.print();" class="btn btn-xl btn-warning"><i class="fa fa-print" aria-hidden="true"></i> Imprimir</a>
        @foreach ($fs as $f)
        <div class="ticket">
                <div class="ticket__content">
                  <p class="" style="text-align:center">Numero de factura <br><strong style="font-size:26px">{{$f->id}}</strong></p>
                  <p class="" style="text-align:center">Fecha y Hora <br><strong style="font-size:16px">{{$f->fecha}}</strong></p>
                  <p class="" style="text-align:center">Placa <br><strong style="font-size:26px">{{$f->placa}}</strong></p>
                  <p class="" style="text-align:center">Tiempo <br><strong style="font-size:26px">{{$f->numerohoras}} min</strong></p>
                  <p class="" style="text-align:center">Valor Total <br><strong style="font-size:28px">{{number_format($f->valortotal)}}</strong></p>
                </div>
              </div>

        @endforeach
  
    </div>
</div>
@endsection
