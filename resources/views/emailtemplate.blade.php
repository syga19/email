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
                            <td>{{ $post['text'] }}</td>
                          </tr>
                @endforeach
            </tbody>
    </table>


@endsection