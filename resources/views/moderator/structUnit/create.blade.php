@extends('layouts.app')

@section('content')
    <div class="container">
    
        <form class="form-horizontal" action="{{route('moderator.StructUnit.store')}}" method="POST">
            {{csrf_field()}}
             @include('moderator.structUnit.partials.form')
        </form>
    </div>
@endsection