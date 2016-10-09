@extends('base')

@section('content')


{{--    {!! Form::open() !!}--}}
    {!! Form::open(array('url' => "/task/".$data['0']->id, 'method' => 'post')) !!}

    @include('_common._editForm')

    {!! Form::close() !!}
@stop