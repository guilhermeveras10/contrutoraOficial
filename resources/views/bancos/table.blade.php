<div class="table-responsive">
    <table class="table" id="bancos-table">
        <thead>
            <tr>
                <th>Codigo Do Banco</th>
        <th>Descricao</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bancos as $bancos)
            <tr>
                <td>{!! $bancos->codigo_do_banco !!}</td>
            <td>{!! $bancos->descricao !!}</td>
                <td>
                    {!! Form::open(['route' => ['bancos.destroy', $bancos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('bancos.show', [$bancos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('bancos.edit', [$bancos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
