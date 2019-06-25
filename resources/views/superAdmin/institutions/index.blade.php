@extends('layouts.app')

@section('content')
    <div class="container">
    <a href="{{route('superAdmin.institutions.create')}}" class="btn btn-primary">Создать Институт</a>
    <table class="table table-striped">
        <thead>
            <th>#</th>
            <th>Название</th>
            <th>Описание</th>
            <th >Действие</th>
        </thead>
        <tbody>
            @forelse ($institutions as $institution)
            <tr>
            <td>{{$institution->id}}</td>
            <td>{{$institution->institut}}</td>
            <td>{{$institution->description}}</td>
            <td>
                <a href="{{route('superAdmin.institutions.delete',['id'=>$institution->id])}}">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
                
            </td>
            </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>данные отсутствуют</h2></td>    
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$institutions->links()}}
                    </ul>
                </td>
            </tr>
        </tfoot>
    </table>
    </div>
@endsection