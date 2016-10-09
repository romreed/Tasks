@extends('base')

@section('content')

    {{--@include('_common._showListForm');--}}
    <h2 class="text-center">show by id</h2>
    @if (!empty($task))
        @foreach ($task as $info )
            <p><b>id:</b>{{ $info->id }} <b>UserName:</b>{{ $info->userName }} <b>Nickname:</b>{{ $info->nickname }} <b>Task:</b>{{ $info->task }} <b>created_at:</b>{{ $info->created_at }} <b>updated_at:</b>{{ $info->updated_at }}
                {{--{!! link_to_route('task.show','show',$task->id) !!}--}}
                {!! link_to_route('task.edit','edit',$info->id) !!}
                {!! link_to_route('task.destroy','destroy',$info->id) !!}
            </p>
        @endforeach
    @else
        'not have axcess to mass'
    @endif

@stop