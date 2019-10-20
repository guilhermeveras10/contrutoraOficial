<!-- Fornecedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fornecedor', 'Fornecedor:') !!}
    {!! Form::text('fornecedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Endereco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco', 'Endereco:') !!}
    {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
</div>

<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', 'Bairro:') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
</div>

<!-- Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cidade', 'Cidade:') !!}
    {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cep', 'Cep:') !!}
    {!! Form::text('cep', null, ['class' => 'form-control']) !!}
</div>

<!-- Ddd1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ddd1', 'Ddd1:') !!}
    {!! Form::text('ddd1', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone1', 'Telefone1:') !!}
    {!! Form::text('telefone1', null, ['class' => 'form-control']) !!}
</div>

<!-- Ddd2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ddd2', 'Ddd2:') !!}
    {!! Form::text('ddd2', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone2', 'Telefone2:') !!}
    {!! Form::text('telefone2', null, ['class' => 'form-control']) !!}
</div>

<!-- Ddd3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ddd3', 'Ddd3:') !!}
    {!! Form::text('ddd3', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax', 'Fax:') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Ddd4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ddd4', 'Ddd4:') !!}
    {!! Form::text('ddd4', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Contato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contato', 'Contato:') !!}
    {!! Form::text('contato', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnpj Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj_cpf', 'Cnpj Cpf:') !!}
    {!! Form::text('cnpj_cpf', null, ['class' => 'form-control']) !!}
</div>

<!-- Inscricao Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inscricao_rg', 'Inscricao Rg:') !!}
    {!! Form::text('inscricao_rg', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Site Field -->
<div class="form-group col-sm-6">
    {!! Form::label('site', 'Site:') !!}
    {!! Form::text('site', null, ['class' => 'form-control']) !!}
</div>

<!-- Acoes Tipo De Fornecedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('acoes_tipo_de_fornecedor', 'Acoes Tipo De Fornecedor:') !!}
    {!! Form::text('acoes_tipo_de_fornecedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('fornecedores.index') !!}" class="btn btn-default">Cancel</a>
</div>
