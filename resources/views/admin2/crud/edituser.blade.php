@extends('admin2.home')
@section('content')
    <div style="margin: 0px;width:100%;padding-top: 50px;">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email"  value="{{ $user->email }}" name="email" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password"  name="password" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="true" {{ $user->status ? 'selected' : '' }}>Active</option>
                        <option value="false" {{ !$user->status ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone"  value="{{ $user->phone }}" name="phone" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" name="address"  value="{{ $user->address }}" rows="3" required></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add User</button>
            <a href="{{ route('users.index') }}" class="btn btn-danger">Back</a>
{{--                <div class="row">--}}
{{--                    <div class="col-md-6 m-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="name">Name</label>--}}
{{--                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 m-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="email">Email</label>--}}
{{--                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row">--}}
{{--                    <div class="col-md-6 m-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="password">Password</label>--}}
{{--                            <input type="password" class="form-control" id="password" name="password">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 m-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="status">Status</label>--}}
{{--                            <select class="form-control" id="status" name="status">--}}
{{--                                <option value="true" {{ $user->status ? 'selected' : '' }}>Active</option>--}}
{{--                                <option value="false" {{ !$user->status ? 'selected' : '' }}>Inactive</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row">--}}
{{--                    <div class="col-md-6 m-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="phone">Phone Number</label>--}}
{{--                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="address">Address</label>--}}
{{--                            <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <button type="submit" class="btn btn-primary">Update</button>--}}

        </form>

    </div>
@endsection
