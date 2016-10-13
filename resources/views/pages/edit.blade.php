@extends('layouts.app')

@section('content')


    <div class="panel-heading"> <h1 class="text-center">Edit</h1> </div>

<div class="panel-body">
            {!! Form::open(array('url' => "/task/".$data['0']->id, 'method' => 'post')) !!}

            @include('_common._editForm')

            {!! Form::close() !!}
</div>


@stop