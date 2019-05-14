@extends('layouts.app')

@section('course_content')
<div class="jumbotron" style="margin:0px; padding-bottom: 30px;padding-left: 64px;">
    <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="display-4">{{$course->code}}</h1>
            <p class="lead">{{$course->title}}</p>
            <button type="submit" class="btn-primary btn-lg btn-light"><h6>Enroll Now!</h6></button>
        </div>
        <div class="col-lg-6">
        </div>
     </div>
    </div>
</div>
<ul class="nav nav-tabs" style="padding-left: 3%; margin-bottom: 3%; margin-top: 5px;">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#about">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#review">Reviews</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#instructor">Instructor</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#discussion">Discussions</a>
    </li>
</ul>

<div class="tab-content">
    <div id="about" class="tab-pane fade in active">
        <div class="container">
            <h1 class="lead" style="font-size: 3.0rem;">About the Course</h1>
            <div class="row">
                <div class="col-lg-6">
                    Rating star
                </div>
                <div class="col-lg-6">
                    <table>
                        <tr>
                            <th><h6><strong>Location:</strong> {{$course->roomnumber}}</h6></th>
                        </tr>
                        <tr>
                            <th><h6><strong>Start Time : </strong><em>{{$course->starttime}}</em></h6></th>
                            <th><h6><strong>End Time: </strong><em>{{$course->endtime}}</em></h6></th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h5>{{$course->description}}</h5>
                </div>
            </div>
        </div>
    </div>
    <div id="review" class="tab-pane fade">
        <div class="container">
            <h3>Reviews</h3>
        </div>
    </div>
    <div id="instructor" class="tab-pane fade">
        <div class="container">
            <h3>Instructors</h3>
        </div>
    </div>
    <div id="discussion" class="tab-pane fade">
        <div class="container">
            <div class="col-lg-8">
                <div class="card">
                    @foreach($threads as $thread)
                        <div class="card-header"><a href="#">{{$thread->creator->first_name}}</a> discussed {{$thread->title}} on
                            {{$thread->created_at->diffForHumans()}}</div>
                        <div class="card-body">
                            <article>
                                <div class="body">{{$thread->body}}</div>
                            </article>
                            <hr>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>



@endsection