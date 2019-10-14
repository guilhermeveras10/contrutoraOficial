<!-- Unidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidade', 'Unidade:') !!}
    {!! Form::text('unidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Unidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao_unidade', 'Descricao Unidade:') !!}
    {!! Form::text('descricao_unidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('unidades.index') !!}" class="btn btn-default">Cancel</a>
</div>
