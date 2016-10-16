@extends('layouts.app')



@section('content')


    <div class="panel-heading"><h2 class="text-center">Upload File</h2></div>
    <ul>
        @if (!empty($name))
           <li> {{$status}} </li>
        @else
        @endif
    </ul>

    <div class="panel-body">
        @include('_common._uploadFile')
    </div>
@stop