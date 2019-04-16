<table class="table table-responsive" id="detalleTarifas-table">
    <thead>
        <tr>
            <th>Descripcion</th>
        <th>Minutosinicio</th>
        <th>Minutosfinal</th>
        <th>Valor</th>
        <th>Valorrecargo</th>
        <th>Tarifas Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($detalleTarifas as $detalleTarifa)
        <tr>
            <td>{!! $detalleTarifa->descripcion !!}</td>
            <td>{!! $detalleTarifa->minutosinicio !!}</td>
            <td>{!! $detalleTarifa->minutosfinal !!}</td>
            <td>{!! $detalleTarifa->valor !!}</td>
            <td>{!! $detalleTarifa->valorrecargo !!}</td>
            <td>{!! $detalleTarifa->tarifas_id !!}</td>
            <td>
                {!! Form::open(['route' => ['detalleTarifas.destroy', $detalleTarifa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('detalleTarifas.show', [$detalleTarifa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('detalleTarifas.edit', [$detalleTarifa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>