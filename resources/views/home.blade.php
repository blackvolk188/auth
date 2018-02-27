@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <table class="table table-responsive table-striped table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Confirmed</th>
                            <th>Registered at</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <td>{{$user->id}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->confirm}}</td>
                            <td>{{$user->userRegistrationLog->registered_at}}</td>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
