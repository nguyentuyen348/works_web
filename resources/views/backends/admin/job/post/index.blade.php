@extends('backends.layouts.master')
@section('content')
    <style>
        .col-md-2,.col-md-10,.col-md-12{
            float: left;
        }
        p{
            padding: 0 0 0 0;
            margin-block-start: 0;
            margin-block-end: 0;
        }
    </style>

    <div class="wraper-job-detail-header" style="margin-left: 100px">
        <div>
            <h2>
                LIST JOB
            </h2>
        </div>

        <div>
            <p><a class="btn btn-success btn-lg" href="{{route('jobs.create')}}">create job</a></p>
        </div>
        <section class="page-job-detail-header">
            <div class="box box-md" style="padding: 0 0 0 0 ">
                <div class="row">


                    <div class="col-md-2 col-logo" style="width: 150px">
                        @foreach($companies as $company)
                            <span class="center-block text-center logo-wrapper">
                           <img src="{{asset('storage/'.$company->logo)}}" alt="" style="width: 150px">
                            </span>
                        @endforeach
                    </div>

                    <div class="col-md-10 col-content-wrapper" style="margin-left: 10px">
                        @foreach($jobs as $job)
                        <div class="row">
                            <div>
                                <h1>
                                    {{$job->name}}
                                </h1>
                            </div>
                            <div class="col-md-12">
                                <p>   Title: {{' '.$job->title}} </p>
                            </div>

                            <div class="col-md-12">
                                <p> Level: {{' '.$job->level}} </p>
                            </div>

                            <div class="col-md-12">
                                <p> Type: {{' '.$job->type}} </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>



@endsection
