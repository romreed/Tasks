{{--@if (count($errors) > 0)--}}
    {{--<div class="alert alert-danger">--}}
    {{--<ul>--}}
        {{--@foreach ($errors->all() as $error)--}}
            {{--<li>{{ $error }}</li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}
    {{--</div>--}}
{{--@endif--}}

    <?php
        echo Form::open(['url' => '/upload','files'=>'true','enctype'=>'multipart/form-data']);
        echo 'Please select File to Upload';
        echo "<br>";
        echo Form::file('image');
        echo "<br>";
    ?>
@if ($errors->has('image'))
    <div class="alert alert-danger">
        <ul>
            <li> {{$errors->first('image')}}</li>
        </ul>
    </div>
@endif
    <?php
        echo Form::submit('Upload File');
        echo "<br>";
        echo Form::close();
    ?>


@if (!empty($name))
    {{$name}} <br> {{$extension}} <br> {{ $path }} <br> {{ $size }} <br> {{ $mime  }}
@else

@endif