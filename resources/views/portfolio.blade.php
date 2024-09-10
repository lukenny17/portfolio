{{-- resources/views/portfolio.blade.php --}}
@extends('layout') {{-- Extends layout --}}

@section('title', 'My Portfolio') {{-- Sets the page title --}}

@section('content')

    {{-- Hero section --}}
    <section class="hero-banner d-flex align-items-center justify-content-center text-center">
        <div class="hero-content">
            <div class="row g-3">
                <div class='col-md-6'>
                    <h1 class="display-4 fw-bold mb-3 typing-animation">Luke Kenny</h1>
                    <p class="lead mb-4">A portfolio showcasing my projects, skills, and journey into a new Software
                        Engineering career
                    </p>
                    <a href="#projects" class="btn btn-primary btn-lg">Explore My Work</a>
                </div>
                <div class='col-md-6'>
                    <img src="{{ asset('images/profilepic.JPEG') }}" class="img-fluid circle-image" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>

    {{-- Projects section --}}
    <section id="projects" class="text-center my-5">
        <h2 class="mb-4">Projects</h2>
        <div class="container">
            <div class="row g-3">
                @foreach ($projects as $project)
                    {{-- Iterate through projects --}}
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm h-100">
                            @if ($project->images->isNotEmpty())
                                <img src="{{ asset($project->images->first()->path) }}" class="card-img-top"
                                    alt="{{ $project->name }}">
                            @else
                                {{-- Add default image --}}
                                <img src="default/path/to/image.jpg" class="card-img-top" alt="Default Image">
                            @endif
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $project->name }}</h5>
                                <p class="card-text">{{ $project->description }}</p>
                                <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal"
                                    data-bs-target="#projectModal{{ $project->id }}">
                                    Learn More
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for each project -->
                    <div class="modal fade" id="projectModal{{ $project->id }}" tabindex="-1"
                        aria-labelledby="projectModalLabel{{ $project->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="projectModalLabel{{ $project->id }}">{{ $project->name }}
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Carousel for project images -->
                                    <div id="carousel{{ $project->id }}" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach ($project->images as $index => $image)
                                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                    <img src="{{ asset($image->path) }}" class="d-block w-100"
                                                        alt="{{ $project->name }}">
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carousel{{ $project->id }}" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carousel{{ $project->id }}" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>

                                    <!-- Project details -->
                                    <p class="mt-3">{{ $project->details }}</p>
                                    <p class="mt-3"><strong>Technologies Used:</strong> {{ $project->technologies }}</p> <!-- Technologies moved to modal -->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Other sections like Resume, Experience, Contact -->
@endsection
