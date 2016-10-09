@extends('base')

@section('content')
    <h2 class="text-center">showList</h2>
    {!! link_to_route('task.create','Add New Task') !!}
    @include('_common._showListForm');


@stop