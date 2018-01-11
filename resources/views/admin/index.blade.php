@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">

        <div class="col-md-12">
        <table id="userTable">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>

                        @if ($user->role == 0)
                            <td>User</td>
                        @elseif($user->role == 1)
                            <td>Modérateur</td>
                        @else
                            <td>Administrateur</td>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </div>












    <script>
        $(document).ready(function(){
            $('#userTable').DataTable();
        });
    </script>
@endsection