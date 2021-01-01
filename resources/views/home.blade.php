@extends('base')

@section('title')
Blog| home_Page
@endsection
@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group">
                    <a href="" class="list-group-item list-group-item-action">Sports</a>
                    <a href="" class="list-group-item list-group-item-action">Technology </a>
                    <a href="" class="list-group-item list-group-item-action">Business</a>
                    <a href="" class="list-group-item list-group-item-action">Crimes</a>
                    <a href="" class="list-group-item list-group-item-action">Science</a>
                </div>
            </div>
            <div class="col-lg-9">
                @foreach ($posts as $item)
                    
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="display-4">{{$item->title}}</h2>
                    <p class="lead">{{$item->post}}</p>
                        <a href="" class="btn btn-success float-right">Read more..</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection