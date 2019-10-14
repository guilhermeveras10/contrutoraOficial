<!-- Tipo De Fornecedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_de_fornecedor', 'Tipo De Fornecedor:') !!}
    {!! Form::text('tipo_de_fornecedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipos.index') !!}" class="btn btn-default">Cancel</a>
</div>
