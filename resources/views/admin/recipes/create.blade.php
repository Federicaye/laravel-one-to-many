@extends('layouts.app')

@section('content')
<form action="{{route('admin.recipes.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" class="form-control" id="name" placeholder="name" name="name">
</div>

<div class="mb-3">
    <label for="prep_time" class="form-label">prep time</label>
    <input type="text" class="form-control" id="prep_time" placeholder="prep time" name="prep_time">
</div>

<div>
    <label for="category_id" class="form-label">Select Category</label>
    <select name="category_id" id="category_id" class="form-control">
        <option value="">Select a category</option>
        @foreach ($categories as $category)
            <option value="{{$category->id}}" {{ $category->id == $category->id ? 'selected' : '' }}>{{$category->name}}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

<div>
    <p>Seleziona gli ingredienti</p>
    @foreach ($ingredients as $ingredient)

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="{{$ingredient->id}}" id="{{$ingredient->id}}" name="ingredients[]">
            <label class="form-check-label" for="flexCheckDefault">
                {{ $ingredient->name}}
            </label>
        </div>
    @endforeach 


</div>

<div>
<button type="submit" class="btn btn-danger">Create</button>
<button type="reset" class="btn btn-secondary">Reset</button>
</div>
</form>
@endsection