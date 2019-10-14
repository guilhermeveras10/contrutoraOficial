<div class="table-responsive">
    <table class="table" id="contas-table">
        <thead>
            <tr>
                <th>Banco</th>
        <th>Agencia</th>
        <th>Conta Corrente</th>
        <th>Empresa</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contas as $contas)
            <tr>
                <td>{!! $contas->banco !!}</td>
            <td>{!! $contas->agencia !!}</td>
            <td>{!! $contas->conta_corrente !!}</td>
            <td>{!! $contas->empresa !!}</td>
                <td>
                    {!! Form::open(['route' => ['contas.destroy', $contas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('contas.show', [$contas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('contas.edit', [$contas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
