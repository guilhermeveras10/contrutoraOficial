<div class="table-responsive">
    <table class="table" id="fornecedores-table">
        <thead>
            <tr>
                <th>Fornecedor</th>
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
        <th>Cnpj Cpf</th>
        <th>Inscricao Rg</th>
        <th>Email</th>
        <th>Site</th>
        <th>Acoes Tipo De Fornecedor</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($fornecedores as $fornecedores)
            <tr>
                <td>{!! $fornecedores->fornecedor !!}</td>
            <td>{!! $fornecedores->endereco !!}</td>
            <td>{!! $fornecedores->bairro !!}</td>
            <td>{!! $fornecedores->cidade !!}</td>
            <td>{!! $fornecedores->estado !!}</td>
            <td>{!! $fornecedores->cep !!}</td>
            <td>{!! $fornecedores->ddd1 !!}</td>
            <td>{!! $fornecedores->telefone1 !!}</td>
            <td>{!! $fornecedores->ddd2 !!}</td>
            <td>{!! $fornecedores->telefone2 !!}</td>
            <td>{!! $fornecedores->ddd3 !!}</td>
            <td>{!! $fornecedores->fax !!}</td>
            <td>{!! $fornecedores->ddd4 !!}</td>
            <td>{!! $fornecedores->celular !!}</td>
            <td>{!! $fornecedores->contato !!}</td>
            <td>{!! $fornecedores->cnpj_cpf !!}</td>
            <td>{!! $fornecedores->inscricao_rg !!}</td>
            <td>{!! $fornecedores->email !!}</td>
            <td>{!! $fornecedores->site !!}</td>
            <td>{!! $fornecedores->acoes_tipo_de_fornecedor !!}</td>
                <td>
                    {!! Form::open(['route' => ['fornecedores.destroy', $fornecedores->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('fornecedores.show', [$fornecedores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('fornecedores.edit', [$fornecedores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
