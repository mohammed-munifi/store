@extends('layouts.dashboard')

@section('title','Edit')

@section('content')

<form action="{{route('dashboard.categories.update',$category->id)}}" method="post">


    <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->


    @csrf

    <div class="mb-3">

        <label for="name" class="form-lable">category Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}">
    </div>
    <div class="mb-3">
        <label for="name" class="form-lable">URL Slug</label>
        <input type="text" class="form-control" name="slug" id="slug"value="{{$category->slug}}" >
    </div>
    <div class="mb-3">
        <label for="name" class="form-lable">category parent</label>
        <select name="parent_id" id="parent_id" class="form-control">
            <option value="">No parent</option>
            @foreach($parents as $parent)
            <option value="{{$parent->id}}" @if($parent->id == $category->parent_id) selected @endif>{{ $parent->name }} </option>
            @endforeach
        </select>
        <div class="mb-3">
            <label for="name" class="form-lable">image</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>


    </div>
</form>


@endsection