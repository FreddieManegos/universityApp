@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="img/pic.png" alt=""  class="rounded" width="150px" height="150px">
                        </div>
                        <div class="col-lg-6 align-self-center" >
                            <a href="profile/{{Auth::user()->id}}"><span>{{Auth::user()->first_name.' '.Auth::user()->last_name}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
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

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
