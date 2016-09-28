<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <title>{{$title}}</title>
</head>
<body>
    <div class="container">

        <h1 class="text-center">{{$PageTitle}}</h1> <!--c экранированием-->
        <h1 class="text-center">{!!$PageTitle!!}</h1> <!--без  экранирования-->
        <!--h1 class="text-center">{{isset($PageTitle) ? $PageTitle.' без if' : 'Гостевая книга (С if)' }}</h1> <!--c экранированием-->
        @if (!empty($pagetitle))
            {{$PageTitle}}
            @elseif (!empty ($title))
                {{$title}}
            @else
                'Гостевая книга'
            @endif
        <!--цикл-->
        @if (!empty($users))
            @foreach ($users as $user )
                <p>{{ $user['name'] }}</p>
                @endforeach
            @else
            'not acess to mass'
        @endif
        <hr/>
        @yield('content')
    </div>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>