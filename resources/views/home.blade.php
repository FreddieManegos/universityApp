@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body">
                    <img src="img/pic.png" alt=""  class="rounded" width="150px" height="150px">
                    <a href="user/{{Auth::user()->id}}/edit"><span>{{Auth::user()->first_name.' '.Auth::user()->last_name}}</span></a>
                </div>
            </div>

        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Newsfeed</div>

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
