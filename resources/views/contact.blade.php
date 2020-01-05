@extends('layouts/app')


@section('content')


    <h1>CONTACT PAGE</h1>

    @if(count($people))
        <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>

        @endforeach
        </ul>
    @endif

@stop

@section('footer')

    <!-- <script>alert ('Hello guys')</script> -->

@stop