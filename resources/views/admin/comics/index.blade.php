@extends('layouts.app')

@section('content')

<section class="user_comics py-5">
    <div class="container">
        <h2>Comics List</h2>
        <div class="row g-4">
            @forelse($comics as $comic)
            <div class="col-12">
                <div class="card d-flex justify-content-between">
                    <h6>{{$comic->title}}</h6>
                    <div class="price">{{$comic->price}}</div>
                    <div class="thumb">
                        <img width="80" src="{{$comic->thumb}}" alt="">
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                Ops! no comics available yet!
                Go Add some new comics!
            </div>
            @endforelse
        </div>
    </div>

</section>

@endsection