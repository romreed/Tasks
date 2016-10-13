

{{--{!! Form::open(['route' => 'task.update']) !!}--}}
<div class="form-group">
    {!! Form::label('user name') !!}
    {!! Form::text('name',$data['0']->name,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('id') !!}
    {!! Form::text('id',$data['0']->id,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('nickname') !!}
    {!! Form::text('nickname',$data['0']->nickname,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email') !!}
    {!! Form::text('email',$data['0']->email,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('task') !!}
    {!! Form::textarea('task',$data['0']->task,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at(not work)') !!}
    {!! Form::input('date','published_at',date('Y-m-d'),['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Create',['class' => 'btn btn-primary']) !!}

</div>

{{--{!! Form::close() !!}--}}