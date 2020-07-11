@extends('layouts.app')
@section('page-title', 'Students list')
@section('content')
        <div class="container">
       <div class="row">
           <div class="col-12">
               <div class="d-flex justify-content-between align-items-center">
                   <h1 class="mt-3 mb-3">students list</h1>
                   <a class="btn btn-primary"
                   href="{{ route('students.create') }}">
                       New Student
                   </a>
                 </div>
               <table class="table">
                   <thead>
                       <tr>
                           <th scope="col">ID</th>
                           <th scope="col">Name</th>
                           <th scope="col">Lastname</th>
                           <th scope="col">Matricola</th>
                           <th scope="col">Email</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @forelse ($students as $student)
                           <tr>
                               <td>{{ $student->id }}</td>
                               <td>{{ $student->name }}</td>
                               <td>{{ $student->lastname }}</td>
                               <td>{{ $student->matricola }}</td>
                               <td>{{ $student->email }}</td>
                               <td>
                                   <a class="btn btn-info" href="{{ route('students.show', ['student' => $student->id])}}">Info</a>
                                   <a class="btn btn-warning btn-sm" href="{{ route('students.edit', ['student' => $student->id]) }}">
                                       Change
                                   </a>
                                   <form action="{{ route('students.destroy', ['student' => $student->id]) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                    </form>
                               </td>
                           </tr>
                       @empty
                           <tr>
                               <td colspan="4">There are no students</td>
                           </tr>

                       @endforelse
                   </tbody>
               </table>
           </div>
       </div>
   </div>
@endsection
