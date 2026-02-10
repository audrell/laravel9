<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="/">WPD Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home.index') ? 'active' : '' }}" href="{{ route('home.index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('about.index') ? 'active' : '' }}" href="{{ route('about.index') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('posts.index', 'posts.show') ? 'active' : '' }}" href="{{ route ('posts.index') }}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('categories.index') ? 'active' : '' }}" href="{{ route ('categories.index') }}">Categories</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
