@extends("layout.default")

@section("content")
    <h1>{{ $movie->title }}</h1>
    <p>{{ $movie->genre }}, {{ $movie->director }}    {{ $movie->year }}</p>
    <p>{{ $movie->story }}</p>

    <h2>Comments</h2>

    @foreach ($movie->comments as $comment)
        <p>{{ $comment->content }}</p>
    @endforeach

    <form method="POST" action={{ url("createcomment") }}>
        @csrf
        <div>
        <input type="hidden" name="movie_id" value="{{ $movie->id }}" required><br>
        <label for="content">Content</label><br>
        <textarea type="text" name="content" required></textarea><br>
        <button type="submit">Create Comment</button><br>
        </div>
    </form>
  @include("components.errors")
  @include("components.status")
@endsection



