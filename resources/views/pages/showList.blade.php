@extends('layouts.app')

@section('content')
    {{  Session::get('message') }}
                    <div class="panel-heading"><h2 class="text-center">Show List</h2>{!! link_to_route('task.create','Add New Task') !!}</div>

                    <div class="panel-body">

                    @include('_common._showListForm');
                        </div>

@stop