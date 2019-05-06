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
                            <div class="col-lg-6 align-self-center">
                                <span>{{$user->first_name.' '.$user->last_name}}</span>
                            </div>
                        </div>
                    </div>
                    @if(Auth::user()->id != $user->id)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <button type="button" name="Add Friend" class="form-control btn-success">Add Friend</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Information Page
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection