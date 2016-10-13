
@if (!empty($tasks))
    @foreach ($tasks as $task )
        <p><b>id:</b>{{ $task->id }} <b>UserName:</b>{{ $task->name }} <b>Nickname:</b>{{ $task->nickname }} <b>Task:</b>{{ $task->task }} <b>created_at:</b>{{ $task->created_at }} <b>updated_at:</b>{{ $task->updated_at }}
            {!! link_to_route('task.show','show',$task->id) !!}
            {!! link_to_route('task.edit','edit',$task->id) !!}
            {!! link_to_route('task.destroy','destroy',$task->id) !!}
        </p>
    @endforeach
@else
    'not acess to mass'
@endif