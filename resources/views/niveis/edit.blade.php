@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Niveis
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($niveis, ['route' => ['niveis.update', $niveis->id], 'method' => 'patch']) !!}

                        @include('niveis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection