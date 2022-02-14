@extends('layouts.app')
@section('content')
    <h1>Student Info</h1> 
    <h3>Name: {{$student->name}}</h3>
    <h3>Id: {{$student->id}}</h3>
    <h3>DOB: {{$student->dob}}</h3>

    <h2>The sum is: {{$sum}}</h2>
@endsection 