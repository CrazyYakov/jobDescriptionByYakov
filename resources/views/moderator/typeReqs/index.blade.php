@extends('layouts.app')

@section('content')
    <div class="container">
    <a href="{{route('moderator.typeReqs.create')}}" class="btn btn-primary">Создать тип требования</a>
    <table class="table table-striped">
        <thead>
            <th>#</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Действие</th>
        </thead>
        <tbody>
            @forelse ($typeReqs as $typeReq)
            <tr>
            <td>{{$typeReq->id}}</td>
            <td>{{$typeReq->nameType}}</td>
            <td>{{$typeReq->description}}</td>
            <td>
                <a href="{{route('superAdmin.institutions.delete',['id'=>$typeReq->id])}}">
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
                        {{-- {{$typeReqs->links()}} --}}
                    </ul>
                </td>
            </tr>
        </tfoot>
    </table>
    </div>
@endsection