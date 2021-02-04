@extends('layouts.master')
@section('content')
    <h1>Clients</h1>
    <form action="">
        <input class="btn btn-primary float-right" type="submit" value="SENT">
    </form>
    <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
            <th scope="col">Emails templates</th>
          </tr>
        </thead>
        <tbody>
    @foreach ($posts as $post)
            <tr>
                <td>{{ $post['name'] }}</td>
                <td>{{ $post['surname'] }}</td>
                <td>{{ $post['email'] }}</td>
                <td><form action="" method="POST">
                    {{-- {{ route('posts.destroy', $post['id']) }} --}}
                    <input class="btn btn-danger" type="submit" value="DELETE">
                </form> 
                <form action="{{ route('show', $post['id']) }}" method="GET">
                    <input class="btn btn-primary" type="submit" value="UPDATE">
                </form>
                </td>
                <td><button type="submit"  class="btn btn-primary" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#myModalHorizontal">Sent</button>
                </td>
              </tr>
            </tbody>
    {{-- <h2>{{ $post['name'] }}</h2>
    <h2>{{ $post['surname'] }}</h2>
    <p>{{ $post['email'] }}</p> --}}
    @endforeach
    </table>


    <form method="POST" action="/">
        @csrf
        <h2>Add new client</h2>
        <hr>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="surname">Surname:</label><br>
        <input type="text" id="surname" name="surname"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <input class="btn btn-primary" type="submit" value="Create">
    </form>

    <!-- Modal -->
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header" style="background: rgb(103, 130, 204)0, 149, 147)">
                <h4 class="modal-title" id="myModalLabel" style="color: rgb(88, 88, 88);">Select email template</h4>
                <br>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>            <!-- Modal Body -->
            <div class="modal-body">
                <div>
                    Email templates
                </div>
                <form id="selectTemplate" name="selectTemplate">
                    <div class="header-btn">
                        <div id="div-physical">
                            <label>
                                <input id="template" name="template" value="0" type="radio" checked="" class="validate[required]" data-errormessage-value-missing="Email template is required!">
                                First template
                            </label>
                        </div>
                </form>
                <div class="modal-body">
                    <div class="modal-footer" id="modal_footer">
                        <!--<input id="btnSubmit" name="btnSubmit" value="Donate" class="btn btn-default-border-blk" type="submit">-->
                        <a id="bntSent" class="btn btn-primary">Sent</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection