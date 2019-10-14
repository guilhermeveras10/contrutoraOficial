@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Contas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contas, ['route' => ['contas.update', $contas->id], 'method' => 'patch']) !!}

                        @include('contas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection