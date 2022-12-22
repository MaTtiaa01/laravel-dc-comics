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
                        <td>
                            <a class="btn btn-primary" href="#">view</a>
                            <a class="btn btn-primary" href="{{route('comics.edit',$comic->id)}}">edit</a>
                            <a class="btn btn-danger" href="{{route('comics.destroy',$comic->id)}}">delete</a>

                        </td>
                    </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

</section>

@endsection