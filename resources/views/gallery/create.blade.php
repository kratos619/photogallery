@extends('layouts/main')
@section('content')

    <div class="callout primary">
      <article class="grid-container">
        <div class="row column">
          <h1>Create Gallery.</h1>
        </div>
      </article>
    </div>
    
    <article class="grid-container">
      <div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-4">
        <div style="padding:30px;">
            {!! Form::open(array('action' => 'GalleryController@store' ,'enctype' => 'multipart/form-data')) !!}
              
              {{ Form::label('name', 'Name')}}
              {{ Form::text('name', $value = null, $attributes = ['placeholder' => 'Enter Your Name' , 'name' => 'name']) }}
              
              {{ Form::label('description', 'Description')}}
              {{ Form::text('name', $value = null, $attributes = ['placeholder' => 'Write Description' , 'name' => 'description']) }}
             
              {{ Form::label('cover_image', 'Cover Image')}}
              {{ Form::file('name', $value = null, $attributes = ['placeholder' => 'Write Description' , 'name' => 'description']) }}
                 
                {{ Form::submit('Submit', $attributes = ['value' => 'Submit' , 'class' => 'button']) }}
                
            {!! Form::close() !!}

        </div>
      </div>
    </article>

@endsection