@extends('layouts.app')

@section('title')Contacts Page @endsection

@section('content')
   <h1>Contacts Page</h1>
   <form action="{{ route('submit-message') }}" method="post">
      @csrf
      <div class="form-group">
         <label for="name"class="mt-3">Name</label>
         <input type="text" name="name" id="name" placeholder="Name" class="form-control">
      </div>
      <div class="form-group">
         <label for="email" class="mt-3">Email</label>
         <input type="text" name="email" id="email" placeholder="Email"class="form-control">
      </div>
      <div class="form-group">
         <label for="subject" class="mt-3">Subject</label>
         <input type="text" name="subject" id="subject" placeholder="Subject"class="form-control">
      </div>
      <div class="form-group">
         <label for="message" class="mt-3">Message</label>
         <textarea name="message" id="message" class="form-control" placeholder="Message"></textarea>
      </div>
      <button type="submit" class="btn btn-info mt-4">Submit</button>
   </form>
@endsection