@extends('layouts.app')

@section('content')
    <h1>This is login page!</h1>
    <form action="{{route('login.submit')}}", method="post">
            {{@csrf_field()}}
            <input type="text" placeholder="Name" name="name" value="{{old('name')}}" id="">
            @error('name')
            <span>{{$message}}</span>
            @enderror
            <br>
            <input type="text" placeholder="ID" name="id" value="{{old('id')}}" id="">
            @error('id')
            <span>{{$message}}</span>
            @enderror
            <br>
            <input type="text" placeholder="Username" name="uname" value="{{old('uname')}}" id="">
            @error('uname')
            <span>{{$message}}</span>
            @enderror
            <br>
            <input type="password" placeholder="Password" name="password" id="">
            @error('password')
            <span>{{$message}}</span>
            @enderror
            <br>
            <input type="password" placeholder="Confirm Password" name="conf_password" id="">
            @error('conf_password')
            <span>{{$message}}</span>
            @enderror
            <br>
            <input type="submit">
        </form>
@endsection

@section('demo')
    <h2>This demo content!</h2>
@endsection