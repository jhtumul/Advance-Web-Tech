@extends('layouts.admin_layout')

@section('content')
    <h2>Course-1: </h2>
    <h3>Name: {{$course->name}}</h3>
    <h3>Instructor: {{$course->instructor}}</h3>
    <h3>Duration: {{$course->duration}}</h3>
    <h3>Start: {{$course->start}}</h3><br>
@endsection