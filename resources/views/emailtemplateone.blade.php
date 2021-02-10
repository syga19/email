  
@extends('layouts.master')
@section('content')
<form action="{{ route('template.update', $post['id']) }}" method="POST">
    @method('PUT') @csrf 
    <textarea id="mce"  name="text" cols="30" rows="4" placeholder="{!! $post['text'] !!}" class="form-control lg"></textarea>
    <input class="btn btn-primary" type="submit" value="UPDATE">
</form>
@endsection
