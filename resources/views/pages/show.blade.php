@extends('layouts.app')

@section('content')

    {{--@include('_common._showListForm');--}}
    <div class="panel-heading"> <h2 class="text-center">Show by id</h2> </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>id:</th>

                <th>UserName:</th>

                <th>Nickname:</th>

                <th>Task:</th>

                <th>Created_at:</th>

                <th>Updated_at:</th>
                <th>REST</th>

            </tr>
            </thead>
            <tbody>
                @if (!empty($task))
                    @foreach ($task as $info )
                        <tr>
                            {{--<p><b>id:</b>{{ $task->id }} <b>UserName:</b>{{ $task->name }} <b>Nickname:</b>{{ $task->nickname }} <b>Task:</b>{{ $task->task }} <b>created_at:</b>{{ $task->created_at }} <b>updated_at:</b>{{ $task->updated_at }}--}}
                            {{----}}
                            {{--</p>--}}
                            <td>{{ $info->id }}</td><td>{{ $info->name }}</td><td>{{ $info->nickname }}</td><td>{{ $info->task }} </td><td>{{ $info->created_at }}</td><td>{{ $info->updated_at }}</td>
                            <td>{!! link_to_route('task.show','show',$info->id) !!}<br>{!! link_to_route('task.edit','edit',$info->id) !!}<br>{!! link_to_route('task.destroy','destroy',$info->id) !!}</td>
                        </tr>
                    @endforeach
                @else
                    'not have axcess to mass'
                @endif
            </tbody>
        </table>
    </div>
@stop