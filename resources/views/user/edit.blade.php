@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">Update your Profile</div>
                <div class="card-body">
                    <div class="row" style="padding-left:5%">
                        <div class="col-lg-6 col-md-12 border-right">
                        <h5>Change information</h5><hr>
                        <form method="POST" action="{{route('user.update',$user->id)}}" file=true enctype="multipart/form-data" >
                            @csrf
                            @method('PATCH')
                            <label for="img">Avatar</label>
                            <div class="col-lg-12 ">
                                <div class="form-group">
                                    @if(Auth::user()->img != "img/pic.png")
                                        <img src="{{url('images/'.$user->img)}}" alt="" height="150px" name="img" class="mx-auto d-block rounded">
                                    @else
                                        <img src="{{url('images/pic.png')}}" alt="" height="150px" name="img" class="mx-auto d-block rounded">
                                    @endif
                                    <input type="file" class="" name="img">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="first_name">Name</label>
                                <input type="text" class="form-control" name="first_name"  value="{{$user->first_name}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-info" value="Edit Information">
                            </div>
                        </form>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <h5>Change Password</h5><hr>
                            <form method="POST" action="{{route('user.update',$user->id)}}">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="old_password">Old Password</label>
                                    <input type="password" name="old_password" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Confirm Password</label>
                                    <input type="password" name="confirm_password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-info" value="Edit Password">
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>

@endsection
