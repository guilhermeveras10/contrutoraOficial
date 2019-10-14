<div class="table-responsive">
    <table class="table" id="tipos-table">
        <thead>
            <tr>
                <th>Tipo De Fornecedor</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tipos as $tipos)
            <tr>
                <td>{!! $tipos->tipo_de_fornecedor !!}</td>
                <td>
                    {!! Form::open(['route' => ['tipos.destroy', $tipos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('tipos.show', [$tipos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('tipos.edit', [$tipos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
