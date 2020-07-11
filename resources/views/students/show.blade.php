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
             <!--in questo modo si può eliminare lo studente dalla pagina dei dettagli che corrisponde alla view show.blade.php-->
             <form action="{{ route('students.destroy', ['student' => $student->id]) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                </form>
           </div>
       </div>
   </div>
@endsection
