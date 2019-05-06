@extends('layouts.app')

@section('course_content')
<div class="jumbotron" style="margin:0px;">
    <h1 class="display-4">Course 101</h1>
    <p class="lead">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
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
</div>
@endsection