<div class="table-responsive">
    <table class="table" id="empresas-table">
        <thead>
            <tr>
                <th>Empresa</th>
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
        <th>Contato</th>
        <th>Email</th>
        <th>Nome Da Conta</th>
        <th>Home Page</th>
        <th>Inscricao Estadual</th>
        <th>Cnpj</th>
        <th>Inscricao Municipal</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($empresas as $empresas)
            <tr>
                <td>{!! $empresas->empresa !!}</td>
            <td>{!! $empresas->endereco !!}</td>
            <td>{!! $empresas->bairro !!}</td>
            <td>{!! $empresas->cidade !!}</td>
            <td>{!! $empresas->estado !!}</td>
            <td>{!! $empresas->cep !!}</td>
            <td>{!! $empresas->ddd1 !!}</td>
            <td>{!! $empresas->telefone1 !!}</td>
            <td>{!! $empresas->ddd2 !!}</td>
            <td>{!! $empresas->telefone2 !!}</td>
            <td>{!! $empresas->ddd3 !!}</td>
            <td>{!! $empresas->fax !!}</td>
            <td>{!! $empresas->contato !!}</td>
            <td>{!! $empresas->email !!}</td>
            <td>{!! $empresas->nome_da_conta !!}</td>
            <td>{!! $empresas->home_page !!}</td>
            <td>{!! $empresas->inscricao_estadual !!}</td>
            <td>{!! $empresas->cnpj !!}</td>
            <td>{!! $empresas->inscricao_municipal !!}</td>
                <td>
                    {!! Form::open(['route' => ['empresas.destroy', $empresas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('empresas.show', [$empresas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('empresas.edit', [$empresas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
