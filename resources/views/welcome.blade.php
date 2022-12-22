@extends('layouts.app')

@section('content')

<div class="conatiner py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse($comics as $comic)
        <div class="col text-center">
            <div class="card">
                <div class="card-header">
                    {{$comic->title}}
                </div>
                <div class="card-body">
                    <img src="{{$comic->thumb}}" alt="">
                    <div class="details">
                        <div class="price my-4">Price: {{$comic->price}}$</div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            No comics available yet!
        </div>
        @endforelse
    </div>
</div>

@endsection