@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tindakan
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tindakan, ['route' => ['tindakans.update', $tindakan->id], 'method' => 'patch']) !!}

                        @include('tindakans.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection