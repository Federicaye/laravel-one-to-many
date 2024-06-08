@extends('layouts.app')

@section('content')
<h2>Categorie</h2>
<table class="table table-hover">
    <thead>
        <tr>
            <th>name</th>
           
        </tr>
    </thead>
    @foreach ($cathegories as $category)
        <tr>
            <td>{{$category->name}}</td>
           
            <td>
                <a href="{{route('admin.cathegories.edit')}}"> <i class="fa-solid fa-pencil"></i></a>
                <a href="{{route('admin.cathegories.destroy')}}"><i class="fa-solid fa-trash"></i></a>
                <a href="{{route('admin.cathegories.show')}}"><i class="fa-solid fa-eye"></i></a>
            </td>
        </tr>

    @endforeach
</table>

@endsection