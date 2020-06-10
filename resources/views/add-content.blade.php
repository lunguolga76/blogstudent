@extends('layouts.site')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 >{{$header}}</h1>
            <p>{{$message}}</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="form">
    <form method="POST"action="{{route('articleStore')}}">
    <div class="form-group">
            <label for="title">Title</label>
        <input type="text" class="form-control form-control-lg" id="title" name="title"></input>
        </div>
        <div class="form-group">
            <label for="alias">Pseudonim</label>
                <input type="text" class="form-control form-control-lg" id="alias" name="alias"></input>
        </div>
        <div class="form-group">
            <label for="img">Imagine</label>
            <input type="text" class="form-control form-control-lg" id="img" name=img"></input>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Description</label>
            <textarea class="form-control form-control-lg" name="desc"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Text</label>
            <textarea class="form-control form-control-lg" name="text"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        {{csrf_field()}}
    </form>


@endsection
