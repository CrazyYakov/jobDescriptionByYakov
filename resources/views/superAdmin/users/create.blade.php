@extends('layouts.app')

@section('content')
    <div class="container">
    
        <form class="form-horizontal" action="{{route('superAdmin.users.store')}}" method="POST">
            {{csrf_field()}}
             @include('superAdmin.users.partials.form')
        </form>
    </div>
@endsection