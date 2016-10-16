
{{--@if (!empty($tasks))--}}
    {{--@foreach ($tasks as $task )--}}
        {{--<p><b>id:</b>{{ $task->id }} <b>UserName:</b>{{ $task->name }} <b>Nickname:</b>{{ $task->nickname }} <b>Task:</b>{{ $task->task }} <b>created_at:</b>{{ $task->created_at }} <b>updated_at:</b>{{ $task->updated_at }}--}}
            {{--{!! link_to_route('task.show','show',$task->id) !!}--}}
            {{--{!! link_to_route('task.edit','edit',$task->id) !!}--}}
            {{--{!! link_to_route('task.destroy','destroy',$task->id) !!}--}}
        {{--</p>--}}
    {{--@endforeach--}}
{{--@else--}}
    {{--'not acess to mass'--}}
{{--@endif--}}
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
@if (!empty($pagin))
    @foreach ($pagin as $task )
        <tr>
        {{--<p><b>id:</b>{{ $task->id }} <b>UserName:</b>{{ $task->name }} <b>Nickname:</b>{{ $task->nickname }} <b>Task:</b>{{ $task->task }} <b>created_at:</b>{{ $task->created_at }} <b>updated_at:</b>{{ $task->updated_at }}--}}
            {{----}}
        {{--</p>--}}
            <td>{{ $task->id }}</td><td>{{ $task->name }}</td><td>{{ $task->nickname }}</td><td>{{ $task->task }} </td><td>{{ $task->created_at }}</td><td>{{ $task->updated_at }}</td>
            <td>{!! link_to_route('task.show','show',$task->id) !!}<br>{!! link_to_route('task.edit','edit',$task->id) !!}<br>{!! link_to_route('task.destroy','destroy',$task->id) !!}</td>
        </tr>
    @endforeach
@else
    '$pagin empty'
@endif
    </tbody>
</table>
<div class="text-center">{!! $pagin->links() !!}</div>



