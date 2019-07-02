@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>        
            <th scope="col">#</th>
            <th scope="col">Должность</th>
            <th scope="col">Структурное подразделение</th>    
            <th scope="col">Разработчик должностной инструкции</th>
            <th scope="col">Дата утверждения</th> 
                        
          </tr>
        </thead>
        <tbody>
            @foreach ($jobDescriptions as $document )
            <tr>
              <th scope="row">{{$document->id}}</th>
                <th scope="col">{{$document->jname}}</th>
                <th scope="col">{{$document->struct_unit}}</th>
                <th scope="col">{{$document->name}}</th>
                <th scope="col">{{$document->created_at}}</th> 
                 
              </tr>
            @endforeach          
        </tbody>
      </table>
    </div>
@endsection