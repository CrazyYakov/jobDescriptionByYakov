@extends('layouts.app')

@section('content')
    <div class="container">
    
        <form class="form-horizontal" action="{{route('moderator.typeReqs.store')}}" method="GET">
            {{csrf_field()}}
             @include('moderator.typeReqs.partials.form')
        </form>
    </div>
@endsection