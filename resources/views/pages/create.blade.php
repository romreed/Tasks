@extends('base')

@section('content')


    {!! Form::open(['route' => 'task.store']) !!}

    @include('_common._createForm')

    {!! Form::close() !!}
@stop