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
            <tbody>
                @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post['id'] }}</td>
                            <td>{{ $post['text'] }}</td>
                            <td><form action="{{ route('template.destroy', $post['id']) }}" method="POST">
                                @method('DELETE') @csrf
                                <input class="btn btn-danger" type="submit" value="DELETE">
                            </form> 
                            <form action="{{ route('show', $post['id']) }}" method="GET">
                                <input class="btn btn-primary" type="submit" value="UPDATE">
                            </form>
                            </td>
                          </tr>
                @endforeach
            </tbody>
    </table>
    <form method="POST" action="/emailtemplate">
        @csrf
        <h2>Add new template</h2>
        <hr>
        <label for="text">Template text:</label><br>
        <textarea name="text" id="" cols="30" rows="4"></textarea>
        <br>
        <input class="btn btn-primary" type="submit" value="Create">
    </form>

@endsection