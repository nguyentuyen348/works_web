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

                        <input type="text" class="form-control @error('') is-invalid @enderror" name="title" placeholder="">

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
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="level" placeholder="">
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
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="type" placeholder="">
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

                    <input type="text" class="form-control @error('') is-invalid @enderror" name="working_location" placeholder="">

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

                    <textarea class="form-control @error('') is-invalid @enderror" name="description" id="" rows="4"></textarea>

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

                    <textarea class="form-control @error('') is-invalid @enderror" name="requirements" id="" rows="4"></textarea>

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

                    <input type="text" class="form-control @error('') is-invalid @enderror" name="salary" placeholder="">

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
                                Use language for applications :
                            </span>
                    </div>

                    <input type="text" class="form-control @error('') is-invalid @enderror" name="use_language_for_applications" placeholder="">

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
                                Contact Person :
                            </span>
                    </div>

                    <input type="text" class="form-control @error('') is-invalid @enderror" name="contact_person" placeholder="">

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
                                Email For Applications :
                            </span>
                    </div>

                    <input type="email" class="form-control @error('') is-invalid @enderror" name="email_for_applications" placeholder="">

                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>

                <div class="input-group">

                    <div id="job_detail" class="col-md-2">
                        <span class="" >
                                Category :
                            </span>
                    </div>

                    <div class="col-md-2">
                    @foreach($categories as $category)
                        <div  style="border: solid 1px black">
                            <input type="checkbox" id="category" name="category_id" value="{{$category->id}}" style="padding: 2px 2px 2px 2px">
                            <label for="category">{{$category->name}}</label><br>
                        </div>
                   {{-- <input type="text" class="form-control @error('') is-invalid @enderror" name="" placeholder="">--}}
                    @endforeach
                    </div>
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
                                Company :
                            </span>
                    </div>

                    <input type="text" class="form-control @error('') is-invalid @enderror" name="company" placeholder="">

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
                                Người đăng thông báo :
                            </span>
                    </div>

                    <input type="text" class="form-control @error('') is-invalid @enderror" name="user_id" placeholder="">

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


