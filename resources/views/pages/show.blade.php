@extends('layouts.app')

@section('content')

    {{--@include('_common._showListForm');--}}
    <div class="panel-heading"> <h2 class="text-center">Show by id</h2> </div>
    <div class="panel-body">
    @if (!empty($task))
        @foreach ($task as $info )
            <p><b>id:</b>{{ $info->id }} <b>UserName:</b>{{ $info->name }} <b>Nickname:</b>{{ $info->nickname }} <b>Task:</b>{{ $info->task }} <b>created_at:</b>{{ $info->created_at }} <b>updated_at:</b>{{ $info->updated_at }}
                {{--{!! link_to_route('task.show','show',$task->id) !!}--}}
                {!! link_to_route('task.edit','edit',$info->id) !!}
                {!! link_to_route('task.destroy','destroy',$info->id) !!}
            </p>
        @endforeach
    @else
        'not have axcess to mass'
    @endif
    </div>
@stop