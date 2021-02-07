@extends('layouts.master')
@section('content')
    <h1>Template</h1>

    <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Num</th>
            <th scope="col">Text</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            <td>Id</td>
            <td>TEXT</td>
            <td><form action="" method="POST">
                {{-- {{ route('posts.destroy', $post['id']) }} --}}
                <input class="btn btn-danger" type="submit" value="DELETE">
            </form> 
            <form action="" method="GET">
                <input class="btn btn-primary" type="submit" value="UPDATE">
            </form>
            </td>
    </table>


    <form method="POST" action="/">
        @csrf
        <h2>Create new template</h2>
        <hr>
        <label for="surname">Email text:</label><br>
        <textarea name="templateText" id="" cols="20" rows="4"></textarea>
        <input class="btn btn-primary" type="submit" value="Create">
    </form>

@endsection