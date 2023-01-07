@extends('layouts.dashboard')

@section('title','Add category')

@section('content')

<form action="{{route('dashboard.categories.store')}}" method="post">


    <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->


    @csrf

    <div class="mb-3">

        <label for="name" class="form-lable">category Name</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="mb-3">
        <label for="name" class="form-lable">URL Slug</label>
        <input type="text" class="form-control" name="slug" id="slug">
    </div>
    <div class="mb-3">
        <label for="name" class="form-lable">category parent</label>
        <select name="parent_id" id="parent_id" class="form-control">
            <option value="">No parent</option>
        </select>
        <div class="mb-3">
            <label for="name" class="form-lable">image</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>


    </div>
</form>


@endsection