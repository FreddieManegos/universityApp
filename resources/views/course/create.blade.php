@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Create Course
                </div>
                <div class="card-body">
                    <form method="POST" action="" file=true enctype="multipart/form-data" >
                        @csrf
                        @method('GET')
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="first_name">Code</label>
                                    <input type="text" class="form-control" name="first_name">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <label for="first_name">Title</label>
                                    <input type="text" class="form-control" name="first_name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Edit Information">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
