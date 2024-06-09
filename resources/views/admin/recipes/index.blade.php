@extends('layouts.app')

@section('content')
<h2>Ricette</h2>
<table class="table table-hover">
    <thead>
        <tr>
            <th>name</th>
            <th>category</th>
            <th>prep time</th>
            <th>instruction</th>
            <th>image</th>
            <th>actions</th>
        </tr>
    </thead>
    @foreach ($recipes as $recipe)
        <tr>
            <td>{{$recipe->name}}</td>
            <td>{{$recipe->category}}</td>
            <td>{{$recipe->prep_time}}</td>
            <td>{{$recipe->instruction}}</td>
            <td>{{$recipe->image}}</td>
            <td>
                <a href="{{route('admin.recipes.edit', $recipe->slug)}}"> <i class="fa-solid fa-pencil"></i></a>
                <a href="{{route('admin.recipes.destroy', $recipe->slug)}}"><i class="fa-solid fa-trash"></i></a>
                <a href="{{route('admin.recipes.show', $recipe->slug)}}"><i class="fa-solid fa-eye"></i></a>
            </td>
        </tr>

    @endforeach
</table>

@endsection