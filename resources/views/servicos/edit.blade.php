@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar serviço
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-success">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($servicos, ['route' => ['servicos.update', $servicos->id], 'method' => 'patch']) !!}

                        @include('servicos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection