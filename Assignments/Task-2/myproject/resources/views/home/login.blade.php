@extends('layouts.app_layout')

@section('content')
    <h2>This is login page content!</h2>
    <a href="{{route('admin_home')}}" target="_blank">Admin</a><br>
    <a href="{{route('student_home')}}" target="_blank">Student</a><br>
@endsection