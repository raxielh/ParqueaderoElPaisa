<table class="table table-responsive" id="tipovehiculos-table">
    <thead>
        <tr>
            <th>Tipo Vehiculo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipovehiculos as $tipovehiculo)
        <tr>
            <td>{!! $tipovehiculo->desctipovehiculo !!}</td>
            <td>
                {!! Form::open(['route' => ['tipovehiculos.destroy', $tipovehiculo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipovehiculos.show', [$tipovehiculo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipovehiculos.edit', [$tipovehiculo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>