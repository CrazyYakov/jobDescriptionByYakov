@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>        
            <th scope="col">#</th>
            <th scope="col">Должность</th>
            <th scope="col">Структурное подразделение</th>
            <th scope="col">Должастная инструкция</th>
            <th scope="col">Дата утверждения</th> 
            <th scope="col">Дата согласования</th>             
          </tr>
        </thead>
        <tbody>          
            @foreach ($jobDescription as $document)
            <tr>
              <th scope="row">{{$document->$id}}</th>
                <th scope="col">{{$document->field_fk($job_id)}}</th>
                <th scope="col">{{$document->field_fk($unit_id)}}</th>
                <th scope="col">{{$document->$created_by}}</th> 
                <th scope="col">{{$document->$appheard_by}}</th> 
              </tr>
            @endforeach          
        </tbody>
      </table>
    </div>
@endsection