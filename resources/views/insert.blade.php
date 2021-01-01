@extends('base')
@section('title')
Blog| Insert_Page
@endsection
@section('content')

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="text-danger">{{$error}}</li>   
                    @endforeach
                    </ul>
            </div>
           <div class="col-lg-3">
           <div class="card">
               <div class="card-body">
                   <form action="{{route('insertCat')}}" method="POST">
                    @csrf
                       <div class="mb-3">
                           <label for="category">Category Title</label>
                           <input type="text" name="cat_title" class="form-control">
                       </div>
                       <div class="mb-3">
                           <input type="submit" name="cat_send" class="btn btn-success btn-block">
                       </div>
                   </form>
                  
               </div>
           </div>
           </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                <form action="{{route('insertPost')}}" class="mb-3" method="POST">
                   @csrf
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="title">Author</label>
                        <input type="text" name="author" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="category"> Category</label>
                        <input type="text" name="category" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="post">post</label>
                        <textarea rows="5" name="post" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="send" class="form-control btn btn-success btn-block">
                    </div>
                </form>
            </div>
        </div>
            </div>
        </div>
    </div>
    @endsection