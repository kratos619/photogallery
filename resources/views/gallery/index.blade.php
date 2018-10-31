@extends('layouts/main')
@section('content')


    <div class="callout primary">
      <article class="grid-container">
        <div class="">
          <h1>Hello! This is the Gallery of a very witty person.</h1>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna
            ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra.
            Nulla fringilla.</p>
        </div>
      </article>
    </div>
    
<article class="grid-container">
      <div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-4">
@foreach ($gallerys as $gallery)
    <div class="cell">
      <a href="/gallery/show/{{$gallery->id}}">
      <img class="thumbnail" src="/images/{{$gallery->cover_image}}">
      
      </a>    
          
          <h5>{{$gallery->name}}</h5>
          <p class="">{{$gallery->description}}</p>
        </div>
@endforeach
        
      </div>
      <hr>
    </article>    
@endsection