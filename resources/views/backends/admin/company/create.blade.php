@extends('backends.layouts.master')
@section('title','create')
@section('content')

    <div>
        <div style="margin-top: 20px">
            <h2>
                CREATE COMPANY
            </h2>
        </div>
        <div>
            <form method="post" action="" enctype="multipart/form-data">
                @csrf

                <div class="input-group">
                    <div  id="job_detail">
                        <span class="" >
                                Name :
                            </span>
                    </div>

                    <input type="text" class="form-control @error('') is-invalid @enderror" name="name" placeholder="">

                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>

                <div class="input-group">
                    <div id="job_detail">
                        <span class="" >
                                Company size :
                            </span>
                    </div>
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="company_size"   placeholder="">


                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>


                <div class="input-group">
                    <div id="job_detail">
                        <span class="" >
                                Address :
                            </span>
                    </div>
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="address" placeholder="">
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>

                <div class="input-group">
                    <div id="job_detail">
                        <span class="" >
                                Industry :
                            </span>
                    </div>
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="industry" placeholder="">
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>

                <div class="input-group">
                    <div id="job_detail">
                        <span class="" >
                                benefits :
                            </span>
                    </div>
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="benefits" placeholder="">
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>

                <div class="input-group">
                    <div id="job_detail">
                        <span class="" >
                                Logo :
                            </span>
                    </div>
                    <input type="file" class="form-control @error('') is-invalid @enderror" name="logo" placeholder="">
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>

                <div class="input-group">
                    <div id="job_detail">
                        <span class="" >
                                Photo description :
                            </span>
                    </div>
                    <input type="file" class="form-control @error('') is-invalid @enderror" name="photo_description" placeholder="">
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>

                <div class="input-group">
                    <div id="job_detail">
                        <span class="" >
                                video description :
                            </span>
                    </div>
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="video_description" placeholder="">
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection


