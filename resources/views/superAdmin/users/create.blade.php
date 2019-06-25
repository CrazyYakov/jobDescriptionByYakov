@extends('layouts.app')

@section('content')
    <div class="container">
    
        <form class="form-horizontal" action="{{route('superAdmin.institutions.store')}}" method="GET">
            {{csrf_field()}}
             @include('superAdmin.institutions.partials.form')
        </form>
    </div>
@endsection