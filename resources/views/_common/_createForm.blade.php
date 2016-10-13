
<div class="form-group">
    {!! Form::label('user name') !!}
    {!! Form::text('name',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('nickname') !!}
    {!! Form::text('nickname',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email') !!}
    {!! Form::text('email',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('task') !!}
    {!! Form::textarea('task',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at') !!}
    {!! Form::input('date','published_at',date('Y-m-d'),['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Create',['class' => 'btn btn-primary']) !!}

</div>