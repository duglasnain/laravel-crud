@extends('layouts.app')

@section('title')Update message @endsection

@section('content')
   <h1>Update message</h1>
   <form action="{{ route('submit-update-message', $data->id) }}" method="post">
      @csrf
      <div class="form-group">
         <label for="name"class="mt-3">Name</label>
         <input type="text" name="name" id="name" value="{{$data->name}}" class="form-control">
      </div>
      <div class="form-group">
         <label for="email" class="mt-3">Email</label>
         <input type="text" name="email" id="email" value="{{$data->email}}"class="form-control">
      </div>
      <div class="form-group">
         <label for="subject" class="mt-3">Subject</label>
         <input type="text" name="subject" id="subject" value="{{$data->subject}}"class="form-control">
      </div>
      <div class="form-group">
         <label for="message" class="mt-3">Message</label>
         <textarea name="message" id="message" class="form-control">{{$data->message}}</textarea>
      </div>
      <button type="submit" class="btn btn-success mt-4">Submit</button>
   </form>
@endsection