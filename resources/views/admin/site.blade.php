@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="{{route('superAdmin.institutions.index')}}">Создать институт</a>
                <a href="#" class="list-group-item">
                 <p><span class="label label-primary">
                         Институты  
                     </span> </p>
                </a>                                
            </div>
            <div class="col-sm-6">
                    <a class="btn btn-block btn-default" href="#">Создать Пользователя</a>
                    <a href="#" class="list-group-item">
                     <p><span class="label label-primary">
                             Пользователи  
                         </span> </p>
                    </a>                                
                </div>
        </div>
    </div>
@endsection