<div class="table-responsive">
    <table class="table" id="carteiras-table">
        <thead>
            <tr>
                <th>Banco</th>
        <th>Codigo Carteira</th>
        <th>Descricao</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($carteiras as $carteiras)
            <tr>
                <td>{!! $carteiras->banco !!}</td>
            <td>{!! $carteiras->codigo_carteira !!}</td>
            <td>{!! $carteiras->descricao !!}</td>
                <td>
                    {!! Form::open(['route' => ['carteiras.destroy', $carteiras->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('carteiras.show', [$carteiras->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('carteiras.edit', [$carteiras->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
