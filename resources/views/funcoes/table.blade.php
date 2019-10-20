<div class="table-responsive">
    <table class="table" id="funcoes-table">
        <thead>
            <tr>
                <th>Funcao</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($funcoes as $funcoes)
            <tr>
                <td>{!! $funcoes->funcao !!}</td>
                <td>
                    {!! Form::open(['route' => ['funcoes.destroy', $funcoes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('funcoes.show', [$funcoes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('funcoes.edit', [$funcoes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
