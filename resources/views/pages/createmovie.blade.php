@extends("layout.default")

@section("content")
    <form method="POST" action={{ url("createmovie") }}>
        @csrf
        <div>
        <label for="title">Title</label><br>
        <input type="text" name="title" required><br>
        <label for="genre">Genre</label><br>
        <input type="text" name="genre" required><br>
        <label for="director">Director</label><br>
        <input type="text" name="director" required><br>
        <label for="year">Year</label><br>
        <input type="text" name="year" required><br>
        <label for="story">Story</label><br>
        <textarea type="text" name="story" required></textarea><br>
        <button type="submit">Create Movie</button><br>
        </div>
  </form>
  @include("components.errors")
  @include("components.status")
@endsection


