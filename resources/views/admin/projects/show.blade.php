@extends('layouts.admin')

@section('content')


<div class="container">

    <h1 class="py-5">Project Details</h1>
        @if(session('updated'))
            <div class="alert alert-success">
                {{ session('updated') }}
            </div>
        @endif
        <div class="card mb-5" style="width: 100%;">
            <div class="card">
                <div class="card-body">  
                    <h5 class="card-title">{{ $project->title}}</h5>
                        <div class="image">
                            <img class="img-fluid" width="300px" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                            <p>{{ $project->image_original_name }}</p>
                        </div>
                    <p class="card-text"><span>Publication Date: </span>{{ $project->publication_date }}</p>
                    <p class="card-text">{{ $project->description }}</p>
                    <div class="d-flex  justify-content-center gap-2">
                        @include('generic_stuff.generic_edit_buton', ['route' => route('admin.projects.edit', $project)])
                        @include('generic_stuff.generic_delete_buton', ['route' => route('admin.projects.destroy', $project)])
                    </div>
                </div>
            </div>

        </div>
        <a class="btn btn-light fw-bold" href="{{ route('admin.projects.index')}}"><i class="fa-solid fa-arrow-left"></i></a>

</div>


@endsection