@extends('frontend.main_master')
@section('content')
    <div class="body-content">
        <div class="container">

            <div class="row">
               <br>
                <div class="col-md-2">
                    <img src="{{(!empty($user->profile_photo_path)) ? url('upload/user_images/'.$user->profile_photo_path):url('upload/150x100.png')}}" alt="" height="100%" width="100%" style="border-radius:50%">
                    <br><br>
                    <ul class="list-group list-group-flush">
                        <a href="" class="btn btn-primary btn-sm btn-block"> Home</a>
                        <a href="{{route('user.profile')}}" class="btn btn-primary btn-sm btn-block"> Profile Update</a>
                        <a href="{{route('change.password')}}" class="btn btn-primary btn-sm btn-block"> Change Password</a>
                        <a href="{{route('user.logout')}}" class="btn btn-danger btn-sm btn-block"> Logout</a>
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
                        {{Auth::user()->name}} Welcom to Easy Shop Online
                    </h3>
                   </div>
                </div> 
            </div>
        </div>

    </div>
@endsection

