@extends('layouts.app')

@section('content')

<div class="conatiner py-5">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header">
                    {{$comic->title}}
                </div>
                <div class="card-body">
                    <img src="{{$comic->thumb}}" alt="">
                    <div class="details">
                        <div class="price my-4">Price: {{$comic->price}}$</div>
                        <div class="description">Details: {{$comic->description}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection