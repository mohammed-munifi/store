@extends('layouts.dashboard')

@section('content')
@section('title','categories')

@if($status)
<div class="alert alert-success">
    {{$status}}
</div>
@endif

<div class="mb-4">
    <a href="{{route('dashboard.categories.create')}}" class="btn btn-outline-primary">
        <i class="fas fa-plus"></i>Add New
    </a>

</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>parent ID</th>
            <th>Created AT</th>
            <th>UPDATED AT</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td><strong>{{ $category->name }}</strong><br><span class="text-muted">{{ $category->slug }}</span></td>
            <td>{{ $category->parent_id }}</td>
            <td>{{ $category->created_at }}</td>
            <td>{{ $category->updated_at ?? 'No update'}}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection