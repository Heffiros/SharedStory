@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">

        <div class="col-md-12">
        <table id="userTable">
            <thead>
                <tr>
                    <th>{{trans('admin.name')}}</th>
                    <th>{{trans('admin.email')}}</th>
                    <th>{{trans('admin.role')}}</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <div class="form-group">
                        <select data-id="{{$user->id}}"  class="roleUserChange form-control">
                            <option value="0" @if ($user->role == 0) selected @endif>{{trans('admin.user')}}</option>
                            <option value="1" @if ($user->role == 1) selected @endif>{{trans('admin.moderator')}}</option>
                            <option value="2" @if ($user->role == 2) selected @endif>{{trans('admin.admin')}}</option>
                        </select>
                        </div>
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

            //Mise en place du datatable
            $('#userTable').DataTable({
                "language": {
                    @if (app()->getLocale() == 'fr')
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json",
                    @else
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/English.json",
                    @endif
                }
            });


            //Gestion des selecteur
            $('.roleUserChange').on('change', function() {
                var url = '{{action('UserController@changeRole', ['user' => 'id_user'])}}'
                url = url.replace('id_user', $(this).data('id'))
                //alert(url)
                $.ajax({
                    url: url,
                    data : {
                        role: $(this).val()
                    }
                }).done(function() {
                    alert('Le role du user a été modifié')
                });
            })
        });



    </script>
@endsection