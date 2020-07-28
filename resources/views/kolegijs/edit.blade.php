@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Kolegij
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($kolegij, ['route' => ['kolegijs.update', $kolegij->id], 'method' => 'patch']) !!}

                        @include('kolegijs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection