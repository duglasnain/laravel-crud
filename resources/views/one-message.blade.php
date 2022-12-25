@extends('layouts.app')

@section('title'){{$data->subject}} @endsection

@section('content')
   <h1>{{ $data->subject }}</h1>
   <div class="alert alert-info">
      <p>{{ $data->message }}</p>
      <p>{{ $data->email }} - {{ $data->name }}</p>
      <div class="row">
         <p class="col-5"><small>Created: {{$data->created_at}}</small></p>
         <p class="col-5"><small>Updated: {{$data->updated_at}}</small></p>
      </div>
      <a href="{{ route('update-message', $data->id) }}"><button class="btn btn-primary">Update</button></a>
      <a href="{{ route('delete-message', $data->id) }}"><button class="btn btn-danger">Delete</button></a>
   </div>
   
@endsection