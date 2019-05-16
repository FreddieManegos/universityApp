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
                            <input type="hidden" id="user_to_id" value="{{$user->id}}">
                            <input type="hidden" id="user_from_id" value="{{ Auth::user()->id }}">

                        </div>
                    </div>
                    @if(Auth::user()->id != $user->id)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                    @if(count($friends) == 1)
                                        <div class="form-group">
                                            <button id="sent_friend_req" type="button" name="Sent Friend Request" class="form-control btn-light">Sent Friend Request</button>
                                        </div>
                                    @else
                                        <div class="form-group">
                                            <button id="add_friend" type="button" name="Add Friend" class="form-control btn-success">Add Friend</button>
                                        </div>
                                    @endif
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


    <script>
        $(document).ready(function(){
            $("#add_friend").on('click',function () {
               var user_to = $("#user_to_id").val();
               var user_from = $("#user_from_id").val();
               var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $("#add_friend").attr("name", "Sent Friend Request");
                $("#add_friend").attr("class", "form-control btn-light");
                $("#add_friend").text("Sent Friend Request");
                $("#add_friend").attr("id", "sent_friend_req");
               $.ajax({
                   url:'/addFriendRequest',
                   type: 'POST',
                   data: {
                       _token: CSRF_TOKEN,
                       user_to: user_to,
                       user_from: user_from
                   },
                   success: function () {

                   }
               });
            });
        });

        $(document).ready(function(){
            $("#sent_friend_req").on('click',function () {
                var user_to = $("#user_to_id").val();
                var user_from = $("#user_from_id").val();
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $("#sent_friend_req").attr("name", "Add Friend");
                $("#sent_friend_req").attr("class", "form-control btn-success");
                $("#sent_friend_req").text("Add Friend");
                $("#sent_friend_req").attr("id", "add_friend");
                $.ajax({
                    url:'/deleteFriendRequest',
                    type: 'POST',
                    data: {
                        _token: CSRF_TOKEN,
                        user_to: user_to,
                        user_from: user_from
                    },
                    success: function () {
                    }
                });
            });
        });

    </script>
@endsection