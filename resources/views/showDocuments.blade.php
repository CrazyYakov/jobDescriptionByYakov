@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
          <tr>        
            <th scope="col">#</th>
            <th scope="col">Должность</th>
            <th scope="col">Структурное подразделение</th>
            <th scope="col">Должнастная инструкция</th>            
            <th scope="col">Дата создания</th> 
            <th scope="col">Дата согласования</th>             
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($documents as $document)
              <th scope="row">{{$document->$id}}</th>
                <th scope="col">{{$document->$nameDocument}}</th>                 
                <th scope="col">{{$document->$created_by}}</th> 
                <th scope="col">{{$document->$appheard_by}}</th> 
              </tr>
            @endforeach          
        </tbody>
      </table>
@endsection