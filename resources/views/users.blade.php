@extends('layouts.app')

@section('content')
<table class="table table-hover">

    <thead>

      <th>Users</th>

    </thead>

    <tbody>
@foreach($users as $user)

        <tr>

          <td>{{$user->username}} <img src="{{$user -> profile -> profileImage()}}" width="30" height="30"></td>


        </tr>
@endforeach

    </tbody>

</table>

@endsection

