  
@extends('layouts.master')
@section('content')
<form action="{{ route('clients.update', $post['id']) }}" method="POST">
    @method('PUT') @csrf 
    <input type="text" name="name" value="{{ $post['name'] }}"><br>
    <input type="text" name="surname" value="{{ $post['surname'] }}"><br>
    <input type="text" name="email" value="{{ $post['email'] }}"><br>
    <input class="btn btn-primary" type="submit" value="UPDATE">
</form>
@endsection