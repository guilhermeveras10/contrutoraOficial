<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
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

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Custo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('custo', 'Custo:') !!}
    {!! Form::text('custo', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Cargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cargo', 'Cargo:') !!}
    {!! Form::text('cargo', null, ['class' => 'form-control']) !!}
</div>

<!-- Salario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salario', 'Salario:') !!}
    {!! Form::text('salario', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rg', 'Rg:') !!}
    {!! Form::text('rg', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpf', 'Cpf:') !!}
    {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
</div>

<!-- Ctps Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ctps', 'Ctps:') !!}
    {!! Form::text('ctps', null, ['class' => 'form-control']) !!}
</div>

<!-- Registro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registro', 'Registro:') !!}
    {!! Form::text('registro', null, ['class' => 'form-control']) !!}
</div>

<!-- Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empresa', 'Empresa:') !!}
    {!! Form::text('empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Aso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_aso', 'Data Aso:') !!}
    {!! Form::text('data_aso', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Venc Aso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_venc_aso', 'Data Venc Aso:') !!}
    {!! Form::text('data_venc_aso', null, ['class' => 'form-control']) !!}
</div>

<!-- Exames Field -->
<div class="form-group col-sm-6">
    {!! Form::label('exames', 'Exames:') !!}
    {!! Form::text('exames', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('funcionarios.index') !!}" class="btn btn-default">Cancel</a>
</div>
