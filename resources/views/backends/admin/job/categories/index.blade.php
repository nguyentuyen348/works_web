@extends('backends.layouts.master')
@section('content')

    <div>
        <div style="margin-top: 20px">
            <h2>
                LIST CATEGORY
            </h2>
        </div>
        <p><a class="btn btn-success btn-lg" href="{{route('categories.create')}}">add categories</a></p>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table border="2px" class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">image</th>
                <th scope="col">name</th>
                <th scope="col">quantity</th>
                <th scope="col" colspan="2">action</th>
            </tr>
            </thead>
            @foreach($categories as $category)
                <tbody>
                <tr id="category-{{$category->id}}">
                    <th scope="row">{{$category->id}}</th>
                    <th><img src="{{asset('storage/'.$category->image)}}" alt="{{asset('storage/'.$category->image)}}"
                             style="width: 100px;height: 100px"></th>
                    <th> {{$category->name}}</th>
                    <th> {{$category->quantity}}</th>
                    <th><button class="btn-warning edit"> <a href="{{route('categories.edit',$category)}}" >EDIT</a></button></th>
                    <th><button type="button" class="btn-danger destroy delete-category" data-id="{{$category->id}}">DELETE</button></th>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>



@endsection
