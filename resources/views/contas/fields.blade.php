<!-- Banco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('banco', 'Banco:') !!}
    {!! Form::text('banco', null, ['class' => 'form-control']) !!}
</div>

<!-- Agencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agencia', 'Agencia:') !!}
    {!! Form::number('agencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Conta Corrente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('conta_corrente', 'Conta Corrente:') !!}
    {!! Form::number('conta_corrente', null, ['class' => 'form-control']) !!}
</div>

<!-- Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empresa', 'Empresa:') !!}
    {!! Form::text('empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('contas.index') !!}" class="btn btn-default">Cancel</a>
</div>
