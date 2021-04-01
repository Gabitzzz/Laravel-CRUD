@extends('layouts.master')

@section('content')

    @include('layouts.partials._nav')

    <div class="container mt-5">
       <div class="row">
           <div class="col-sm-4">
               <div class="card" style="width: 18rem;">
                   <div class="card-body">
                       <h5 class="card-title">{{ $movie->name }}</h5>
                       <p>{{ $movie->description }} </p>
                   </div>

                   <ul class="list-group list-group-flush">
                       <li class="list-group-item">Genre: {{ $movie->genre }}</li>
                       <li class="list-group-item">Language: {{ $movie->language }}</li>
                       <li class="list-group-item">Release date: {{ $movie-> release }}</li>
                       <li class="list-group-item">Rating: {{ $movie-> rating }}</li>
                   </ul>
               </div>
           </div>

           <div class="col-sm-4">
               <iframe width="560" height="315" src="{{ $movie->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
       </div>

        <a href="{{ route('movies.edit', $movie->id) }}"
            class="btn btn-primary">Edit</a>

        <form action="{{route('movies.destroy', $movie->id)}}" method="POST">
            @csrf
            @method('DELETE')

{{--            <a href="{{ route('movies.destroy', $movie->id) }}"--}}
{{--               class="btn btn-danger">Delete</a>--}}

            <button type="submit" class="btn btn-danger">Delete</button>
        </form>


    </div>


