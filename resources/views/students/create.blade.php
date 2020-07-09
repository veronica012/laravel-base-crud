@extends('layouts.app')

@section('page-title', 'New Student')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3 mb-3">Insert a new student</h1>
                <form action="{{ route('students.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Student's name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <textarea type="text" name="lastname" class="form-control" id="lastname" placeholder="Student's lastname"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="matricola">Matricola</label>
                        <input type="number" name="matricola" class="form-control" id="matricola" placeholder="Matricola">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
