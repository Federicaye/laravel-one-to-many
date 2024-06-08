@extends('layouts.app')

@section('content')
<h2>Ricette</h2>
<table class="table table-hover">
    <thead>
        <tr>
            <th>name</th>
           
        </tr>
    </thead>
    @foreach ($ingredients as $ingredient)
        <tr>
            <td>{{$ingredient->name}}</td>
          
            <td>
                <a href="{{route('admin.ingredients.edit')}}"> <i class="fa-solid fa-pencil"></i></a>
                <a href="{{route('admin.ingredients.destroy')}}"><i class="fa-solid fa-trash"></i></a>
                <a href="{{route('admin.ingredient.show')}}"><i class="fa-solid fa-eye"></i></a>
            </td>
        </tr>

    @endforeach
</table>

@endsection