@extends('admin2.home')
@section('content')

    <style>
        .error-message {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: red;
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
    <div style="margin: 0px;width:100%;padding-top: 50px;">
        @if(session('error'))
            <div class="error-message">
                {{ session('error') }}
            </div>
                <?php session()->flush(); ?>
        @endif
        <form method="POST" action="{{ route('users.store') }}">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add User</button>
            <a href="{{ route('users.index') }}" class="btn btn-danger">Back</a>
        </form>

    </div>

@endsection
