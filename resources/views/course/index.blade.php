@extends('layouts.app')

@section('course_content')
<div class="jumbotron" style="margin:0px; padding-bottom: 30px;padding-left: 64px;">
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
<ul class="nav border" style="padding-left: 3%; margin-bottom: 3%;">
    <li class="nav-item">
        <a class="nav-link active" href="#">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Syllabus</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Reviews</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Instructor</a>
    </li>
</ul>
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
@endsection