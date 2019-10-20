<!-- Nivel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel', 'Nivel:') !!}
    {!! Form::text('nivel', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('niveis.index') !!}" class="btn btn-default">Cancel</a>
</div>
