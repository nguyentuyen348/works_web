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
        div{
            border: solid 1px black;

        }
        .row{
            --bs-gutter-x: 0;
        }
        .col-content-wrapper{
            margin-left: 5px;
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
                    @foreach($jobs as $job)

                    <div class="col-md-2 col-logo" style="width: 150px">

                            <p>LOGO COMPANY</p>
                           <p> {{$job->company_id}}</p>
                           {{--<img src="{{asset('storage/')}}" alt="" style="width: 150px">--}}

                    </div>

                    <div class="col-md-10 col-content-wrapper">

                        <div class="row">

                            <div class="col-md-12">
                                <p>   Title: {{' '.$job->title}} </p>
                            </div>

                            <div class="col-md-12">
                                <p> Level: {{' '.$job->level}} </p>
                            </div>

                            <div class="col-md-12">
                                <p> Type: {{' '.$job->type}} </p>
                            </div>

                            <div class="col-md-12">
                                <p> Salary: {{' '.$job->salary}} </p>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </section>



@endsection
