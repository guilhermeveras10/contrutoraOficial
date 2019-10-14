@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipos, ['route' => ['tipos.update', $tipos->id], 'method' => 'patch']) !!}

                        @include('tipos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection