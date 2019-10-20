<div class="table-responsive">
    <table class="table" id="niveis-table">
        <thead>
            <tr>
                <th>Nivel</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($niveis as $niveis)
            <tr>
                <td>{!! $niveis->nivel !!}</td>
                <td>
                    {!! Form::open(['route' => ['niveis.destroy', $niveis->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('niveis.show', [$niveis->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('niveis.edit', [$niveis->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
