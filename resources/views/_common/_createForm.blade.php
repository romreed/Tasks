{{--@if (count($errors) > 0)--}}
    {{--<div class="alert alert-danger">--}}
        {{--<ul>--}}
            {{--@foreach ($errors->all() as $error)--}}
                {{--<li>{{ $error }}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--@endif--}}



<div class="form-group">
    {!! Form::label('user name') !!}
    {!! Form::text('name',null,['class' => 'form-control']) !!}
{{--     {{ ($errors->has('name')) ? ($errors->first('name')) : ''}} <br>--}}
    @if ($errors->has('name'))
        <div class="alert alert-danger">
            <ul>
                <li> {{$errors->first('name')}}</li>
            </ul>
        </div>
    @endif

</div>
<div class="form-group">
    {!! Form::label('nickname') !!}
    {!! Form::text('nickname',null,['class' => 'form-control']) !!}
    {{--<div class="alert alert-danger"> {{ ($errors->has('nickname')) ? ($errors->first('nickname')) : ''}} <br> </div>--}}
    @if ($errors->has('nickname'))
        <div class="alert alert-danger">
            <ul>
                <li> {{$errors->first('nickname')}}</li>
            </ul>
        </div>
    @endif
</div>
<div class="form-group">
    {!! Form::label('email') !!}
    {!! Form::text('email',null,['class' => 'form-control']) !!}
    {{--<div class="alert alert-danger"> {{ ($errors->has('email')) ? ($errors->first('email')) : ''}} <br> </div>--}}
    @if ($errors->has('email'))
        <div class="alert alert-danger">
            <ul>
                <li> {{$errors->first('email')}}</li>
            </ul>
        </div>
    @endif
</div>
<div class="form-group">
    {!! Form::label('task') !!}
    {!! Form::textarea('task',null,['class' => 'form-control']) !!}
    {{--<div class="alert alert-danger"> {{ ($errors->has('task')) ? ($errors->first('task')) : ''}} <br> </div>--}}
    @if ($errors->has('task'))
        <div class="alert alert-danger">
            <ul>
                <li> {{$errors->first('task')}}</li>
            </ul>
        </div>
    @endif
</div>

<div class="form-group">
    {!! Form::label('published_at') !!}
    {!! Form::input('date','published_at',date('Y-m-d'),['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Create',['class' => 'btn btn-primary']) !!}

</div>