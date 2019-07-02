@extends('layouts.app')

@section('content')
    <div class="container">
    <a href="{{route('moderator.requirements.create')}}" class="btn btn-primary">Создать требование</a>
    <table class="table table-striped">
        <thead>
            <th>#</th>
            <th>Название</th>
            <th>принадлежит к требованию:</th>
            <th>Действие</th>
        </thead>
        <tbody>
            @forelse ($requirements as $requirement)
            
            
            <tr>
            <td>{{$requirement->id}}</td>
            <td>{{$requirement->name}}</td>
            <td>{{$requirement->nameType}}</td>            
            <td>
                <a href="{{route('superAdmin.institutions.delete',['id'=>$requirement->id])}}">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>                
            </td>
            </tr>         
            @empty
                <tr>
                    <td colspan="4" class="text-center"><h2>данные отсутствуют</h2></td>    
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