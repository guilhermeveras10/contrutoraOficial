<div class="table-responsive">
    <table class="table" id="servicos-table">
        <thead>
            <tr>
                <th>Serviço</th>
        <th>Unidade</th>
        <th>Proposta</th>
        <th>Status</th>
        <th>Medição</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servicos as $servicos)
            <tr>
                <td>{!! $servicos->servico !!}</td>
            <td>{!! $servicos->unidade !!}</td>
            <td>{!! $servicos->proposta !!}</td>
            @if( $servicos->status == 1)
            <td>Cancelado</td>
            @else
            <td>Ativo</td>
            @endif
            @if( $servicos->medicao == 0)
            <td>Metragem</td>
            @else
            <td>Quantidade</td>
            @endif
                <td>
                    {!! Form::open(['route' => ['servicos.destroy', $servicos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('servicos.show', [$servicos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('servicos.edit', [$servicos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
