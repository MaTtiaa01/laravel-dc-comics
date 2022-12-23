@extends('layouts.app')

@section('content')

<section class="user_comics py-5">
    <div class="container">
        <h2>Comics List</h2>

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col"> id</th>
                        <th scope="col">title </th>
                        <th scope="col"> thumb</th>
                        <th scope="col"> price</th>
                        <th scope="col"> series</th>
                        <th scope="col"> sale_date</th>
                        <th scope="col"> type</th>
                        <th scope="col"> actions</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse($comics as $comic)
                    <tr class="">
                        <td scope="row">{{$comic->id}}</td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->thumb}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                        <td class="d-flex flex-column px-2">
                            <a class="btn btn-primary" href="{{route('comics.show',$comic->id)}}">view</a>
                            <a class="btn btn-primary my-3" href="{{route('comics.edit',$comic->id)}}">edit</a>
                            <!-- Modal trigger button -->
                            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#deleteComic-{{$comic->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                            </button>

                            @include('partials.comic_modal')


                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td scope="row">Sorry no record to show</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

</section>

@endsection