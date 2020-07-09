@extends('layouts.app')
@section('page-title', 'Student info')
@section('content')

        <div class="container">
       <div class="row">
           <div class="col-12">
             <h1>Student info</h1>
             <ul>
                 <li>ID: {{ $student->id }}</li>
                 <li>NAME: {{ $student->name }}</li>
                 <li>LASTNAME: {{ $student->lastname }}</li>
                 <li>MATRICOLA: {{ $student->matricola }}</li>
                 <li>EMAIL: {{ $student->email }}</li>
             </ul>
           </div>
       </div>
   </div>
@endsection
