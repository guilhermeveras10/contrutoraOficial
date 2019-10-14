<div class="table-responsive">
    <table class="table" id="cargosses-table">
        <thead>
            <tr>
                <th>Cargo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cargosses as $cargoss)
            <tr>
                <td>{!! $cargoss->cargo !!}</td>
                <td>
                    {!! Form::open(['route' => ['cargosses.destroy', $cargoss->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('cargosses.show', [$cargoss->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('cargosses.edit', [$cargoss->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
