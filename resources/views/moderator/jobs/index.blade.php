@extends('layouts.app')

@section('content')
    <div class="container">
    <a href="{{route('moderator.jobs.create')}}" class="btn btn-primary">Добавить должность</a>
    <table class="table table-striped">
        <thead>
            <th>#</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Действие</th>
        </thead>
        <tbody>
            @forelse ($jobs as $job)
            <tr>
            <td>{{$job->id}}</td>
            <td>{{$job->name}}</td>
            <td>{{$job->description}}</td>
            <td>
                <a href="{{route('superAdmin.institutions.delete',['id'=>$job->id])}}">
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
                        {{-- {{$jobs->links()}} --}}
                    </ul>
                </td>
            </tr>
        </tfoot>
    </table>
    </div>
@endsection