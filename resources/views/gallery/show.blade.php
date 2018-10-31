@extends('layouts/main')
@section('content')
<div class="callout primary">
      <article class="grid-container">
        <div class="">
          <h1>{{$galleri->name}}</h1>
          <p class="lead"></p>
        </div>
      </article>
    </div>
    
<article class="grid-container">
      <div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-4">
 
    <div class="cell">
          <a href="/gallery/show/{{$galleri->id}}">
          <img class="thumbnail" src="/images/{{$galleri->cover_image}}">
          </a>
          <h5>{{$galleri->name}}</h5>
          <p class="">{{$galleri->description}}</p>
      </div>
      </div>
      <hr>
</article>    

@endsection