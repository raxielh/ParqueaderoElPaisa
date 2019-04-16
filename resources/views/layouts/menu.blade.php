<li class="{{ Request::is('home*') ? 'active' : '' }}{{ Request::is('cobrar*') ? 'active' : '' }}{{ Request::is('lugares*') ? 'active' : '' }}">
    <a href="{!! route('home') !!}" style="font-size:18px"><i class="fa fa-home"></i><span> Inicio</span></a>
</li>

<li class="{{ Request::is('tarifas*') ? 'active' : '' }}">
    <a href="{!! route('tarifas.index') !!}"><i class="fa fa-edit"></i><span>Tarifas</span></a>
</li>

<li class="{{ Request::is('tipovehiculos*') ? 'active' : '' }}">
    <a href="{!! route('tipovehiculos.index') !!}"><i class="fa fa-edit"></i><span>Tipo Vehiculos</span></a>
</li>

<li class="{{ Request::is('estadopuestos*') ? 'active' : '' }}">
    <a href="{!! route('estadopuestos.index') !!}"><i class="fa fa-edit"></i><span>Estado puestos</span></a>
</li>

<li class="{{ Request::is('puestos*') ? 'active' : '' }}">
    <a href="{!! route('puestos.index') !!}"><i class="fa fa-edit"></i><span>Puestos</span></a>
</li>

<li class="{{ Request::is('informe*') ? 'active' : '' }}{{ Request::is('r_informe*') ? 'active' : '' }}">
        <a href="{!! route('informe.index') !!}"><i class="fa fa-edit"></i><span>Informe</span></a>
    </li>
    
<li class="{{ Request::is('detalleTarifas*') ? 'active' : '' }}">
    <a href="{!! route('detalleTarifas.index') !!}"><i class="fa fa-edit"></i><span>Detalle Tarifas</span></a>
</li>

