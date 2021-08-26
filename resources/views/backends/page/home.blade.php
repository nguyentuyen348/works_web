@extends('backends.layouts.master')
@section('content')

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    {{--list company--}}
    <div style="margin-top: 10px">
        <div style="margin-top: 20px">
            <h2>
                LIST COMPANY
            </h2>
        </div>
        <p><a class="btn btn-success btn-lg" href="{{route('companies.create')}}">add companies</a></p>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">company size</th>
                <th scope="col">address</th>
                <th scope="col">industry</th>
                <th scope="col">benefits</th>
                <th scope="col">logo</th>
                <th scope="col">photo description</th>
                <th scope="col">video description</th>

            </thead>
            @foreach($companies as $company)
                <tbody>
                <tr>
                    <th scope="row">{{$company->id}}</th>

                    <th> {{$company->name}}</th>
                    <th> {{$company->company_size}}</th>
                    <th> {{$company->address}}</th>
                    <th> {{$company->industry}}</th>
                    <th> {{$company->benefits}}</th>

                    <th><img src="{{asset('storage/'.$company->logo)}}" alt="{{asset('storage/'.$company->logo)}}"
                             style="width: 100px;height: 100px"></th>
                    <th><img src="{{asset('storage/'.$company->photo_description)}}" alt="{{asset('storage/'.$company->photo_description)}}"
                             style="width: 100px;height: 100px"></th>
                    <th> {{$company->video_description}}</th>


                </tr>
                </tbody>
            @endforeach
        </table>
    </div>

    {{--list category--}}
    <div>
        <div style="margin-top: 20px">
            <h2>
                LIST CATEGORY
            </h2>
        </div>

        <p><a class="btn btn-success btn-lg" href="{{route('categories.create')}}">add categories</a></p>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">image</th>
                <th scope="col">name</th>
                <th scope="col">quantity</th>

            </tr>
            </thead>
            @foreach($categories as $category)
                <tbody>
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <th><img src="{{asset('storage/'.$category->image)}}" alt="{{asset('storage/'.$category->image)}}"
                             style="width: 100px;height: 100px"></th>
                    <th> {{$category->name}}</th>
                    <th> {{$category->quantity}}</th>

                </tr>
                </tbody>
            @endforeach
        </table>
    </div>


@endsection
