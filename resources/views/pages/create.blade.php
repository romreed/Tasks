@extends('layouts.app')

@section('content')

    <div class="panel-heading"><h2 class="text-center">Create</h2></div>

    <div class="panel-body">
    {!! Form::open(['route' => 'task.store']) !!}

    @include('_common._createForm')

    {!! Form::close() !!}
    </div>
@stop