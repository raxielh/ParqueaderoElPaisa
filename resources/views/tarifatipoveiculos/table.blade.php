<table class="table table-responsive" id="tarifatipoveiculos-table">
    <thead>
        <tr>
            <th>Nombre Tarifa</th>
        <th>Numminutosinicio</th>
        <th>Valor inicio</th>
        <th>Numminutosfraccion</th>
        <th>Valor fraccion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tarifatipoveiculos as $tarifatipoveiculo)
        <tr>
            <td>{!! $tarifatipoveiculo->descripciontarifa !!}</td>
            <td>{!! $tarifatipoveiculo->numminutosinicio !!}</td>
            <td>{!! $tarifatipoveiculo->valorinicio !!}</td>
            <td>{!! $tarifatipoveiculo->numminutosfraccion !!}</td>
            <td>{!! $tarifatipoveiculo->valorfraccion !!}</td>
            <td>
                {!! Form::open(['route' => ['tarifatipoveiculos.destroy', $tarifatipoveiculo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tarifatipoveiculos.show', [$tarifatipoveiculo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tarifatipoveiculos.edit', [$tarifatipoveiculo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>