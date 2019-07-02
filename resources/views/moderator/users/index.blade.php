@extends('layouts.app')

@section('content')
    <div class="container">
    <a href="{{route('superAdmin.users.create')}}" class="btn btn-primary">Создать Пользователя</a>
    <table class="table table-striped">
        <thead>
            <th>#</th>
            <th>ФИО</th>
            <th>Институт</th>
            <th>email</th>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->institution($user->inst_id)}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{route('superAdmin.users.delete',['id'=>$user->id])}}">
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
                        {{$user->links}}
                    </ul>
                </td>
            </tr>
        </tfoot>
    </table>
    </div>
@endsection