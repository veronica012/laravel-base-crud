@extends('layouts.app')
@section('page-title', 'Students list')
@section('content')
    @foreach ($students as $student)
        <div class="container">
       <div class="row">
           <div class="col-12">
               <table class="table">
                   <thead>
                       <tr>
                           <th scope="col">ID</th>
                           <th scope="col">Name</th>
                           <th scope="col">Lastname</th>
                           <th scope="col">Matricola</th>
                           <th scope="col">Email</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($students as $student)
                           <tr>
                               <td>{{ $student->id }}</td>
                               <td>{{ $student->name }}</td>
                               <td>{{ $student->lastname }}</td>
                               <td>{{ $student->matricola }}</td>
                               <td>{{ $student->email }}</td>
                           </tr>
                       @endforeach
                   </tbody>
               </table>
           </div>
       </div>
   </div>
    @endforeach
@endsection
