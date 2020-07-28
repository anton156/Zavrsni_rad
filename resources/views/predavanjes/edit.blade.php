@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Predavanje
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($predavanje, ['route' => ['predavanjes.update', $predavanje->id], 'method' => 'patch']) !!}

                        @include('predavanjes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection