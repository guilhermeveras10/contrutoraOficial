<!-- Codigo Do Banco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_do_banco', 'Codigo Do Banco:') !!}
    {!! Form::text('codigo_do_banco', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('bancos.index') !!}" class="btn btn-default">Cancel</a>
</div>
