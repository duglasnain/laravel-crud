@extends('layouts.app')

@section('title')All messages @endsection

@section('content')
   <h1>All messages</h1>
   @foreach($data as $message)
      <div class="alert alert-info">
         <h3>{{ $message->subject }}</h3>
         <p>{{ $message->email }}</p>
         <div class="row">
            <p class="col-5"><small>Created: {{$message->created_at}}</small></p>
            <p class="col-5"><small>Updated: {{$message->updated_at}}</small></p>
         </div>
         <a href="{{ route('one-message', $message->id) }}"><button class="btn btn-info">View More</button></a>
      </div>
   @endforeach
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
@endsection