<div class="col">
    <div class="card shadow-sm">
      <div class="card-body">
        <h1>{{ $movie->title }}</h1>
        <p class="card-text">{{ $movie->story }}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a href="/movies/{{ $movie->id }}">View</a>
          </div>
        </div>
      </div>
    </div>
  </div>