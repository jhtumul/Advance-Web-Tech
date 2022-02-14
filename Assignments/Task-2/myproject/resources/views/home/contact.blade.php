@extends('layouts.app_layout')

@section('content')
    <h2>contact-1: </h2>
    <h3>Name: {{$contact->name}}</h3>
    <h3>Position: {{$contact->position}}</h3>
    <h3>Email: {{$contact->email}}</h3>
@endsection