<table class="table table-responsive" id="puestos-table">
    <thead>
        <tr>
            <th>Estado</th>
        <th>Tipo Vehiculo</th>
        <th>Numero</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($puestos as $puesto)
        <tr>
            <td>{!! $puesto->descestadopuesto !!}</td>
            <td>{!! $puesto->desctipovehiculo !!}</td>
            <td>{!! $puesto->numero !!}</td>
            <td>
                {!! Form::open(['route' => ['puestos.destroy', $puesto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('puestos.show', [$puesto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('puestos.edit', [$puesto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>