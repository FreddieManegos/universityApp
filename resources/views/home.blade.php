@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            @if(Auth::user()->img != "img/pic.png")
                                <img src="{{url('images/'.Auth::user()->img)}}" alt=""  class="rounded" width="150px" height="150px">
                            @else
                                <img src="{{url('images/pic.png')}}" alt=""  class="rounded" width="150px" height="150px">
                            @endif
                        </div>
                        <div class="col-lg-6 align-self-center" >
                            <a href="profile/{{Auth::user()->id}}"><span>{{Auth::user()->first_name.' '.Auth::user()->last_name}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            @if(Auth::user()->role->name == "Student")
            <div class="card" style="margin-top: 20px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Courses: </h4>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if(Auth::user()->role->name == "Teacher")
                <div class="card" style="margin-top: 20px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <a href="{{url('course/create')}}"><button class="form-control btn-success">Create Course</button></a>
                                </div>
                                <div class="form-group">
                                    <button class="form-control btn-success">View All Course</button>
                                </div>
                                <div class="form-group">
                                    <button class="form-control btn-success">View All Students</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="background-color: #6cb2eb">Newsfeed</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! You are a {{Auth::user()->role->name}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
