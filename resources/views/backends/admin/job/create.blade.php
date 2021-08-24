@extends('backends.layouts.master')
@section('title','create job')
@section('content')

    <div>
        <div style="margin-top: 20px">
            <h2>
                CREATE JOB
            </h2>
        </div>
        <div>
            <form method="post" action="" enctype="">
                @csrf
                <div class="input-group">
                    <div  id="job_detail">
                        <span class="" >
                                title :
                            </span>
                    </div>

                        <input type="text" class="form-control @error('') is-invalid @enderror" name="" placeholder="">

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
                                level :
                            </span>
                    </div>
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="" placeholder="">
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
                                type :
                            </span>
                    </div>
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="" placeholder="">
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
                                working location :
                            </span>
                    </div>

                    <input type="text" class="form-control @error('') is-invalid @enderror" name="" placeholder="">

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
                                Description :
                            </span>
                    </div>

                    <textarea class="form-control @error('') is-invalid @enderror" name="" id="" rows="4"></textarea>

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
                                Requirement :
                            </span>
                    </div>

                    <textarea class="form-control @error('') is-invalid @enderror" name="" id="" rows="4"></textarea>

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
                                Salary :
                            </span>
                    </div>

                    <input type="text" class="form-control @error('') is-invalid @enderror" name="" placeholder="">

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


