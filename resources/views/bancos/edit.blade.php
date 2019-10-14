@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Bancos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bancos, ['route' => ['bancos.update', $bancos->id], 'method' => 'patch']) !!}

                        @include('bancos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection