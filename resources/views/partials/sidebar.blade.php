<div>
<ul class="nav flex-column">
<li class="nav-item">
    <a class="nav-link active" {{Route::currentRouteName() == 'home' ? 'active' : ''}} href="{{route('home')}}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" {{Route::currentRouteName() == 'admin.dashboard' ? 'active' : ''}} href="{{route('admin.dashboard')}}">Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" {{Route::currentRouteName() == 'admin.recipes.index' ? 'active' : ''}} href="{{route('admin.recipes.index')}}">Recipes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Route::currentRouteName() == 'admin.categories.index' ? 'active' : ''}}" href="{{route('admin.categories.index')}}">Categories</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Route::currentRouteName() == 'admin.ingredients.index' ? 'active' : ''}}" href="{{route('admin.ingredients.index')}}">Ingredients</a>
  </li>
</ul>
</div>