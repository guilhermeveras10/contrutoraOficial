<div class="table-responsive">
    <table class="table" id="funcionarios-table">
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
        <th>Celular</th>
        <th>Custo</th>
        <th>Email</th>
        <th>Cargo</th>
        <th>Salario</th>
        <th>Status</th>
        <th>Rg</th>
        <th>Cpf</th>
        <th>Ctps</th>
        <th>Registro</th>
        <th>Empresa</th>
        <th>Data Aso</th>
        <th>Data Venc Aso</th>
        <th>Exames</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($funcionarios as $funcionarios)
            <tr>
                <td>{!! $funcionarios->nome !!}</td>
            <td>{!! $funcionarios->endereco !!}</td>
            <td>{!! $funcionarios->bairro !!}</td>
            <td>{!! $funcionarios->cidade !!}</td>
            <td>{!! $funcionarios->estado !!}</td>
            <td>{!! $funcionarios->cep !!}</td>
            <td>{!! $funcionarios->ddd1 !!}</td>
            <td>{!! $funcionarios->telefone1 !!}</td>
            <td>{!! $funcionarios->ddd2 !!}</td>
            <td>{!! $funcionarios->telefone2 !!}</td>
            <td>{!! $funcionarios->ddd3 !!}</td>
            <td>{!! $funcionarios->celular !!}</td>
            <td>{!! $funcionarios->custo !!}</td>
            <td>{!! $funcionarios->email !!}</td>
            <td>{!! $funcionarios->cargo !!}</td>
            <td>{!! $funcionarios->salario !!}</td>
            <td>{!! $funcionarios->status !!}</td>
            <td>{!! $funcionarios->rg !!}</td>
            <td>{!! $funcionarios->cpf !!}</td>
            <td>{!! $funcionarios->ctps !!}</td>
            <td>{!! $funcionarios->registro !!}</td>
            <td>{!! $funcionarios->empresa !!}</td>
            <td>{!! $funcionarios->data_aso !!}</td>
            <td>{!! $funcionarios->data_venc_aso !!}</td>
            <td>{!! $funcionarios->exames !!}</td>
                <td>
                    {!! Form::open(['route' => ['funcionarios.destroy', $funcionarios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('funcionarios.show', [$funcionarios->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('funcionarios.edit', [$funcionarios->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
