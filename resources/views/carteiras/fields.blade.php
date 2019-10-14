<!-- Banco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('banco', 'Banco:') !!}
    {!! Form::text('banco', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Carteira Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_carteira', 'Codigo Carteira:') !!}
    {!! Form::number('codigo_carteira', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('carteiras.index') !!}" class="btn btn-default">Cancel</a>
</div>
