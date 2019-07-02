@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="{{route('moderator.typeReqs.create')}}">Создать тип требования</a>
                <a href="{{route('moderator.typeReqs.index')}}" class="list-group-item">
                 <p><span class="label label-primary">
                         список типа требований
                     </span> </p>
                </a>                                
            </div>
            <div class="col-sm-6">
                    <a class="btn btn-block btn-default" href="{{route('moderator.requirements.create')}}">Создать требование</a>
                    <a href="{{route('moderator.requirements.index')}}" class="list-group-item">
                     <p><span class="label label-primary">
                              список требования
                         </span> </p>
                    </a>                                
                </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="{{route('moderator.jobs.create')}}">Создать должность</a>
                <a href="{{route('moderator.jobs.index')}}" class="list-group-item">
                 <p><span class="label label-primary">
                         список должностей
                     </span> </p>
                </a>                                
            </div>
            <div class="col-sm-6">
                    <a class="btn btn-block btn-default" href="{{route('moderator.StructUnit.create')}}">Создать структурное подразделение</a>
                    <a href="{{route('moderator.StructUnit.index')}}" class="list-group-item">
                     <p><span class="label label-primary">
                              список структурных подразделений
                         </span> </p>
                    </a>                                
                </div>
        </div>

        @if (Auth::user()->role_id != 'moderator')
        <div class="">
                <a class="btn btn-block btn-default" href="{{route('admin.user.create')}}">Создать пользователя</a>
                <a href="{{route('admin.user.index')}}" class="list-group-item">
                 <p><span class="label label-primary">
                          список пользователя
                     </span> </p>
                </a>                                
            </div>
        @endif
    </div>
@endsection