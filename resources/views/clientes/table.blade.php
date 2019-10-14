<div class="table-responsive">
    <table class="table" id="clientes-table">
        <thead>
            <tr>
                <th>Nome</th>
        <th>Endereco</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Cep</th>
        <th>Ddd1</th>
        <th>Telefone1</th>
        <th>Ddd2</th>
        <th>Telefone2</th>
        <th>Ddd3</th>
        <th>Fax</th>
        <th>Ddd4</th>
        <th>Celular</th>
        <th>Contato</th>
        <th>Cnpj/Cpf</th>
        <th>Rg</th>
        <th>Email</th>
        <th>Endereco Cobranca</th>
        <th>Bairro Cobranca</th>
        <th>Cidade Cobranca</th>
        <th>Estado Cobranca</th>
        <th>Cep Cobranca</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clientes as $clientes)
            <tr>
                <td>{!! $clientes->nome_cliente !!}</td>
            <td>{!! $clientes->endereco !!}</td>
            <td>{!! $clientes->bairro !!}</td>
            <td>{!! $clientes->cidade !!}</td>
            <td>{!! $clientes->estado !!}</td>
            <td>{!! $clientes->cep !!}</td>
            <td>{!! $clientes->ddd1 !!}</td>
            <td>{!! $clientes->telefone1 !!}</td>
            <td>{!! $clientes->ddd2 !!}</td>
            <td>{!! $clientes->telefone2 !!}</td>
            <td>{!! $clientes->ddd3 !!}</td>
            <td>{!! $clientes->fax !!}</td>
            <td>{!! $clientes->ddd4 !!}</td>
            <td>{!! $clientes->celular !!}</td>
            <td>{!! $clientes->contato !!}</td>
            <td>{!! $clientes->cnpj_cpf !!}</td>
            <td>{!! $clientes->inscricao_rg !!}</td>
            <td>{!! $clientes->email !!}</td>
            <td>{!! $clientes->endereco_cobranca !!}</td>
            <td>{!! $clientes->bairro_cobranca !!}</td>
            <td>{!! $clientes->cidade_cobranca !!}</td>
            <td>{!! $clientes->estado_cobranca !!}</td>
            <td>{!! $clientes->cep_cobranca !!}</td>
                <td>
                    {!! Form::open(['route' => ['clientes.destroy', $clientes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('clientes.show', [$clientes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('clientes.edit', [$clientes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
