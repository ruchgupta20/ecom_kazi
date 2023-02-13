@extends('frontend.main_master')
@section('content')
    <div class="body-content">
        <div class="container">

            <div class="row">
                <br>
                <div class="col-md-2">

             
                    <img src="{{ !empty($user->profile_photo_path) ? url('upload/user_images/'.$user->profile_photo_path) : url('upload/150x100.png') }}"
                        alt="" height="100%" width="100%" style="border-radius:50%">
                    <br><br>
                    <ul class="list-group list-group-flush">
                        <a href="" class="btn btn-primary btn-sm btn-block"> Home</a>
                        <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block"> Profile Update</a>
                        <a href="{{ route('change.password') }}" class="btn btn-primary btn-sm btn-block"> Change Password</a>
                        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block"> Logout</a>
                    </ul>
                </div>

                <div class="col-md-2">

                </div>

                <div class="col-md-6">
                    <div class="card">
                        <h3 class="text-center">
                            <span class="text-danger">
                                <strong>Hi...</strong>

                            </span>
                            {{ Auth::user()->name }} Update Your Profile
                        </h3>
                        <div class="card-body">
                            <form action="{{route('user.profile.store')}}" method="post"  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Name </label>
                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control"
                                        id="exampleInputEmail1">
                                </div>

                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Email </label>
                                    <input type="text" name="email" value="{{ $user->email }}" class="form-control"
                                        id="exampleInputEmail1">
                                </div>

                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Phone </label>
                                    <input type="text" name="phone" value="{{ $user->phone }}" class="form-control"
                                        id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">User Image </label>
                                    <input type="file" name="profile_photo_path" value="{{ $user->phone }}" class="form-control"
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
