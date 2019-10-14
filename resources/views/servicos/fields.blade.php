<!-- Servico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servico', 'Serviço:') !!}
    {!! Form::text('servico', null, ['class' => 'form-control']) !!}
</div>

<!-- Unidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidade', 'Unidade:') !!}
    {!! Form::text('unidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Proposta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proposta', 'Proposta:') !!}
    {!! Form::text('proposta', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label>
        {!! Form::radio('status', '0') !!}
        Ativo
    </label>
    <label>
        {!! Form::radio('status', '1') !!}
        Cancelado
    </label>    
</div>

<!-- Medicao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medicao', 'Medição:') !!}
    <label>
        {!! Form::radio('medicao', '0') !!}
        Metragem
    </label>
    <label>
        {!! Form::radio('medicao', '1') !!}
        Quantidade
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('servicos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
