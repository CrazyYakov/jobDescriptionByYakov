@extends('layouts.app')

@section('content')
    <div class="container">
    
        <form class="form-horizontal" action="{{route('moderator.requirements.store')}}" method="POST">
            {{csrf_field()}}
             @include('moderator.requirements.partials.form')
        </form>
    </div>
@endsection