<table class="table table-responsive" id="tarifas-table">
    <thead>
        <tr>
            <th>Descripcion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tarifas as $tarifas)
        <tr>
            <td>{!! $tarifas->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['tarifas.destroy', $tarifas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tarifas.show', [$tarifas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tarifas.edit', [$tarifas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>