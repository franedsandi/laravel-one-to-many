@extends('layouts.admin')
@section('content')
<h1>Modify the information of the project {{$project->title}}</h1>

<form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Project Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$project->title}}" >
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Project Description</label>
        <textarea type="text" class="form-control" id="description" name="description" rows="3" >{{$project->description}}
        </textarea>
    </div>
    <div class="mb-3">
        <label for="publication_date" class="form-label">Project Publication Date</label>
        <input type="date" class="form-control" id="publication_date" name="publication_date" value="{{$project->publication_date}}">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Project Picture</label>
        <input type="file" class="form-control" id="image" name="image">
        @if ($project)
            <img width="150px" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
        @endif
        
    </div>
    <div class="d-flex gap-2 mt-2">
        <button type="submit" class="btn btn-warning"> Submit</button>
        <button type="reset" class="btn btn-danger"> Reset</button>
    </div>
</form>
@endsection