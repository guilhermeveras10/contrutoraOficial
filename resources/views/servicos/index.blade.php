@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Serviços</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('servicos.create') !!}">Adicionar novo</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-success">
            <div class="box-body">
                    @include('servicos.table')
            </div>
        </div>
        <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $servicos])

        </div>
    </div>
@endsection

