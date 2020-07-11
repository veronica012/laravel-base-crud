<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));

        // return 'lista studenti';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return 'form per inserimento nuovo studente';
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //nella funzione store oltre a salvare i nuovi dati si esegue la validazione dei dati inseriti
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            // 'matricola' => 'required|matricola|unique:students',
            'email' => 'required|email|unique:students',
        ]);

        $dati = $request->all();
        $newStudent = new Student();
        $newStudent->fill($dati);
        $newStudent->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student) //si può passare alla funzione il model al posto dell'id
    {
        // $student = Student::find($id); la elimino come conseguenza del parametro model passato alla funzione
        // dd($student);
        return view('students.show', compact('student'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        if($student) {
            return view('students.edit', compact('student'));
        }
        return abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //la funzione update è incocata quando i dati già esistenti devono essere modificati anche in questo caso si esegue la validazione
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            // 'matricola' => 'required|matricola|unique:students',
            'email' => 'required|email|unique:students'
        ]);

        $dati = $request->all();
        $student=Student::find($id);
        if($student) {
            $student->update($dati);
        }
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //la funzione destroy è invocata per eliminare i dati
        $student = Student::find($id);
        if($student) {
            $student->delete();
        }
        return redirect()->route('students.index');
    }
}
