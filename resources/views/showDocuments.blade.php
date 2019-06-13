@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($documents as $documet)
        <li>{{$documet->nameDocument}}</li>
        @endforeach
    </ul>
@endsection