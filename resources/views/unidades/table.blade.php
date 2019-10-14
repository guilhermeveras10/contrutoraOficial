<div class="table-responsive">
    <table class="table" id="unidades-table">
        <thead>
            <tr>
                <th>Unidade</th>
        <th>Descricao Unidade</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($unidades as $unidades)
            <tr>
                <td>{!! $unidades->unidade !!}</td>
            <td>{!! $unidades->descricao_unidade !!}</td>
                <td>
                    {!! Form::open(['route' => ['unidades.destroy', $unidades->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('unidades.show', [$unidades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('unidades.edit', [$unidades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
