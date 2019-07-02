@extends('layouts.app')

@section('content')
    <div class="container">
    <a href="{{route('moderator.StructUnit.create')}}" class="btn btn-primary">Добавить структурное подразделение</a>
    <table class="table table-striped">
        <thead>
            <th>#</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Действие</th>
        </thead>
        <tbody>
            @forelse ($structUnits as $structUnit)
            <tr>
            <td>{{$structUnit->id}}</td>
            <td>{{$structUnit->struct_unit}}</td>
            <td>{{$structUnit->description}}</td>
            <td>
                <a href="{{route('superAdmin.institutions.delete',['id'=>$structUnit->id])}}">
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
                        {{-- {{$structUnits->links()}} --}}
                    </ul>
                </td>
            </tr>
        </tfoot>
    </table>
    </div>
@endsection