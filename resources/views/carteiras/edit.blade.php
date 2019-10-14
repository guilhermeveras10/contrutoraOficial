@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Carteiras
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($carteiras, ['route' => ['carteiras.update', $carteiras->id], 'method' => 'patch']) !!}

                        @include('carteiras.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection