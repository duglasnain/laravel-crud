
@section('header')

<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{route('contacts')}}" class="nav-link">Contacts</a></li>
        <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
        <li class="nav-item"><a href="{{route('all-messages')}}" class="nav-link">All Messages</a></li>
      </ul>
    </header>
  </div>