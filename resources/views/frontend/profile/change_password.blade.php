@extends('frontend.main_master')
@section('content')
    <div class="body-content">
        <div class="container">

            <div class="row">
                <br>
                <div class="col-md-2">
                    <img src="{{ !empty($user->profile_photo_path) ? url('upload/user_images/' . $user->profile_photo_path) : url('upload/150x100.png') }}"
                        alt="" height="100%" width="100%" style="border-radius:50%">
                    <br><br>
                    <ul class="list-group list-group-flush">
                        <a href="" class="btn btn-primary btn-sm btn-block"> Home</a>
                        <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block"> Profile Update</a>
                        <a href="{{ route('change.password') }}" class="btn btn-primary btn-sm btn-block"> Change
                            Password</a>
                        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block"> Logout</a>
                    </ul>
                </div>

                <div class="col-md-2">

                </div>

                <div class="col-md-6">
                    <div class="card">
                        <h3 class="text-center">
                            <span class="text-danger">
                                <strong>Change Password</strong>
                            </span>

                        </h3>
                        <div class="card-body">
                            <form action="{{ route('user.password.update') }}" method="post" >
                                @csrf
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Current Password </label>
                                    <input type="password" id="current_password" name="oldpassword" type="password"
                                        value="" class="form-control" id="exampleInputEmail1">
                                </div>

                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">New Password </label>
                                    <input type="password" id="password" type="password" name="password" name="email"
                                        value="" class="form-control" id="exampleInputEmail1">
                                </div>

                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Confirm Password </label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        type="password" value="" class="form-control"
                                        id="exampleInputEmail1">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger">Update</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
