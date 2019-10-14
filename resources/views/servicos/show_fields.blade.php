<!-- Servico Field -->
<div class="form-group">
    {!! Form::label('servico', 'Serviço:') !!}
    <p>{!! $servicos->servico !!}</p>
</div>

<!-- Unidade Field -->
<div class="form-group">
    {!! Form::label('unidade', 'Unidade:') !!}
    <p>{!! $servicos->unidade !!}</p>
</div>

<!-- Proposta Field -->
<div class="form-group">
    {!! Form::label('proposta', 'Proposta:') !!}
    <p>{!! $servicos->proposta !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    @if( $servicos->status == 1)
    <p>Cancelado</p>
    @else
    <p>Ativo</p>
    @endif
</div>

<!-- Medicao Field -->
<div class="form-group">
    {!! Form::label('medicao', 'Medição:') !!}
    @if( $servicos->medicao == 0)
    <p>Metragem</p>
    @else
    <p>Quantidade</p>
    @endif
</div>

