<div class="table-responsive">
    <table class="table" id="engenheiros-table">
        <thead>
            <tr>
                <th>Engenheiro</th>
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
        <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($engenheiros as $engenheiros)
            <tr>
                <td>{!! $engenheiros->engenheiro !!}</td>
            <td>{!! $engenheiros->endereco !!}</td>
            <td>{!! $engenheiros->bairro !!}</td>
            <td>{!! $engenheiros->cidade !!}</td>
            <td>{!! $engenheiros->estado !!}</td>
            <td>{!! $engenheiros->cep !!}</td>
            <td>{!! $engenheiros->ddd1 !!}</td>
            <td>{!! $engenheiros->telefone1 !!}</td>
            <td>{!! $engenheiros->ddd2 !!}</td>
            <td>{!! $engenheiros->telefone2 !!}</td>
            <td>{!! $engenheiros->ddd3 !!}</td>
            <td>{!! $engenheiros->fax !!}</td>
            <td>{!! $engenheiros->ddd4 !!}</td>
            <td>{!! $engenheiros->celular !!}</td>
            <td>{!! $engenheiros->contato !!}</td>
            <td>{!! $engenheiros->cnpj_cpf !!}</td>
            <td>{!! $engenheiros->email !!}</td>
                <td>
                    {!! Form::open(['route' => ['engenheiros.destroy', $engenheiros->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('engenheiros.show', [$engenheiros->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('engenheiros.edit', [$engenheiros->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
