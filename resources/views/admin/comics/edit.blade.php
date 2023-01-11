@extends('layouts.app')

@section('content')

<div class="container py-5">


    <form action="{{route('comics.update',$comic->id)}}" method="post" class="card p-3">
        @csrf

        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Title" aria-describedby="helpId" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="thumb" aria-describedby="helpId" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="price" aria-describedby="helpId" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="series" aria-describedby="helpId" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="sale_date" aria-describedby="helpId" value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="type" aria-describedby="helpId" value="{{$comic->type}}">
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</div>

@endsection