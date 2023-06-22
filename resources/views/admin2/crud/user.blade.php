@extends('admin2.home')
@section('content')
    @if(session('error'))
        <div class="alert alert-success success-message">
            {{ session('success') }}
        </div>
    @endif
    <style>
        .success-message {
            background-color: green;
            color: white;
            padding: 10px;
            animation: fadeOut 3s linear;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                display: none;
            }
        }
    </style>
    <script src="https://kit.fontawesome.com/10027750d5.js" crossorigin="anonymous"></script>
    <div style="margin: 0px;width:100%;padding-top: 50px;" class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading d-flex justify-content-between">
                        <h3 class="panel-title">
                            <i class="fa fa-money fa-fw"></i>
                            Table of users
                        </h3>
                        <div>
                            <a href="{{route("users.create")}}" class="btn btn-success"><i class="fa-sharp fa-light fa-plus" style="color: #ffffff;"></i> Create</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>EMAIL</th>
                                    <th>Phone number</th>
                                    <th>Address</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->created_at}}</td>
            <td class="d-flex flex-col"><a href="{{route('users.edit', $user->id)}}" class="btn btn-primary me-3">
                    <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                </a>
                <form action="{{route('users.destroy',["id"=>$user->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                </button></form></td>
        </tr>
    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
