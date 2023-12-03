@extends('layouts.admin')


@section('content')

<div class="container py-5">
    <form action="{{ route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Project Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" >
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="description" class="form-label">Project Description</label>
            <textarea type="text" class="form-control" id="description" name="description" rows="3" >{{old('description')}}
            </textarea>
            @error('description')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="publication_date" class="form-label">Project Publication Date</label>
            <input type="date" class="form-control" id="publication_date" name="publication_date" value="{{old('publication_date')}}">
            @error('publication_date')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Project Picture</label>
            <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
        </div>
    
        <div class="d-flex gap-2 mt-2">
            <button type="submit" class="btn btn-warning"> Submit</button>
            <button type="reset" class="btn btn-danger"> Reset</button>
        </div>
    </form>

</div>
@endsection