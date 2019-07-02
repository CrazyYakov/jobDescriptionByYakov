@extends('layouts.app')

@section('content')
    <div class="container">
    
        <form class="form-horizontal" action="{{route('admin.user.store')}}" method="GET">
            {{csrf_field()}}
             @include('admin.user.partials.form')
        </form>
    </div>
@endsection