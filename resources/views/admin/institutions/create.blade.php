@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="form-horizontal" action="{{'superAdmin.institutions.store'}}" method="POST">
            {{csrf_field()}}
             @include('admin.institutions.partials.form')
        </form>
    </div>
@endsection