@extends('backend')

@section('content')

<style>
    .btn-green {
  background-color: green;
  /* Add any additional styles you want for the green button */
}
</style>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" required></textarea>
    </div>


    <div>
    <button type="submit" class="btn-green">Create Event</button>
    </div>
</form>

@endsection