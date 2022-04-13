@extends('layouts.app')

@section('content')
    <div class="container">
    
        <form class="form-horizontal" action="{{route('moderator.jobs.store')}}" method="POST">
            {{csrf_field()}}
             @include('moderator.jobs.partials.form')
        </form>
    </div>
@endsection