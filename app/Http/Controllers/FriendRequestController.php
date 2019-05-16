<?php

namespace App\Http\Controllers;

use App\FriendRequest;
use Illuminate\Http\Request;

class FriendRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FriendRequest  $friendRequest
     * @return \Illuminate\Http\Response
     */
    public function show(FriendRequest $friendRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FriendRequest  $friendRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(FriendRequest $friendRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FriendRequest  $friendRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FriendRequest $friendRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FriendRequest  $friendRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(FriendRequest $friendRequest)
    {
        //
    }

    public function addFriendRequest(Request $request){
        $ifExist = ['user_to' => $request->user_to, 'user_from' => $request->user_from];

        $check = FriendRequest::where($ifExist)->get();
        if($check->count() < 1){
            $friend_request = new FriendRequest;
            $friend_request->user_to = $request->user_to;
            $friend_request->user_from = $request->user_from;
            $friend_request->save();
        }
    }

    public function deleteFriendRequest(Request $request){
        $ifExist = ['user_to' => $request->user_to, 'user_from' => $request->user_from];
        FriendRequest::where($ifExist)->delete();
    }
}
