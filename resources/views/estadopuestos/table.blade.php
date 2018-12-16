<table class="table table-responsive" id="estadopuestos-table">
    <thead>
        <tr>
            <th>Estado</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($estadopuestos as $estadopuesto)
        <tr>
            <td>{!! $estadopuesto->descestadopuesto !!}</td>
            <td>
                {!! Form::open(['route' => ['estadopuestos.destroy', $estadopuesto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('estadopuestos.show', [$estadopuesto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('estadopuestos.edit', [$estadopuesto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>