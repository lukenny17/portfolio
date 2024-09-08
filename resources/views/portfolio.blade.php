@extends('layout')  {{-- Extends layout --}}

@section('title', 'My Portfolio')  {{-- Sets the page title --}}

@section('content')
<section id="introduction" class="text-center my-4">
    <h1>Welcome to My Portfolio</h1>
    <p>I'm {{env('APP_NAME')}}, an aspiring Software Engineer specialising in [list skills].</p>
</section>

<!-- Projects Section -->
<section id="projects" class="my-5">
    <h2>Projects</h2>
    <div class="row">
        @foreach($projects as $project)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset($project->image_path) }}" class="card-img-top" alt="{{ $project->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->name }}</h5>
                    <p class="card-text">{{ $project->description }}</p>
                    <a href="{{ route('project.show', ['id' => $project->id]) }}" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Other sections like Resume, Professional Experience, Contact -->
@endsection
