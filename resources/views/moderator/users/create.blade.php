@extends('layouts.app')

@section('content')
    <div class="container">
    
        <form class="form-horizontal" action="{{route('superAdmin.users.store')}}" method="GET">
            {{csrf_field()}}
             @include('superAdmin.users.partials.form')
        </form>
    </div>
@endsection