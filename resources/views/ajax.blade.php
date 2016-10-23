@extends('layouts.app')

@section('content')

    <div class="panel-heading">Send HTML Message</div>


    <div class="panel-body">
        <input type="text" id="text" value="Test Message">
        <span class="btn btn-primary" id="test">Primary</span>
    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        var token = '{{Session::token()}}';
        {{--var url = '{{ route('ajax') }}';--}}

    </script>
    <script src="{{ asset('js/myFuncs.js') }}"></script>
@endsection


