@extends('backends.layouts.master')
@section('content')

    <div>
        <div style="margin-top: 20px">
            <h2>
                LIST COMPANY
            </h2>
        </div>
        <p><a class="btn btn-success btn-lg" href="{{route('companies.create')}}">add companies</a></p>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table border="2px" class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">company size</th>
                <th scope="col">address</th>
                <th scope="col">industry</th>

                <th scope="col">logo</th>

                <th scope="col">video description</th>
                <th scope="col" colspan="2">action</th>
            </tr>
            </thead>
            @foreach($companies as $company)
                <tbody>
                <tr>
                    <th scope="row">{{$company->id}}</th>

                    <th> {{$company->name}}</th>
                    <th> {{$company->company_size}}</th>
                    <th> {{$company->address}}</th>
                    <th> {{$company->industry}}</th>


                    <th><img src="{{asset('storage/'.$company->logo)}}" alt="{{asset('storage/'.$company->logo)}}"
                             style="width: 100px;height: 100px"></th>
                   {{-- <th><img src="{{asset('storage/'.$company->photo_description)}}" alt="{{asset('storage/'.$company->photo_description)}}"
                             style="width: 100px;height: 100px"></th>--}}
                    <th> {{$company->video_description}}</th>
                    <th><a href="{{route('companies.detail',$company)}}" class="btn-success">DETAIL</a></th>
                    <th><a href="{{route('companies.edit',$company)}}" class="btn-warning edit">edit</a></th>
                    <th><a href="{{route('companies.destroy',$company)}}" class="btn-danger destroy"
                           onclick="confirm('are you sure')">delete</a></th>

                </tr>
                </tbody>
            @endforeach
        </table>
    </div>



@endsection
