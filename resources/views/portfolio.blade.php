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
                    <a href="#projects" class="btn btn-primary btn-lg hero-btn">Explore My Work</a>
                </div>
                <div class='col-md-6'>
                    <img src="{{ asset('images/profilepic.JPEG') }}" class="img-fluid circle-image" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>

    {{-- About Me --}}
    <section id="about" class="about-me my-5 pt-3 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="{{ asset('images/mountains.JPEG') }}" class="profile-image" alt="Profile Image">
                </div>
                <div class="col-md-8">
                    <p class="lead">
                        Recent <strong>MSc Computer Science</strong> graduate with a decade of experience as a Principal
                        Transport Planner and a First-Class BSc in Mathematics.
                    </p>
                    <p>
                        Ready to swap spreadsheet formulas for code and dive into a software career where what I build goes
                        beyond numbers.
                        Outside of tech, you’ll find me exploring mountains, running, and falling
                        victim to terrible race photos.
                        Looking for opportunities to create solutions that truly make an impact.
                    </p>
                    <p class="mt-3">
                        <a href="#contact" class="btn btn-primary">Let's Connect</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Projects section --}}
    <section id="projects" class="text-center my-5 py-3 bg-light">
        <h2 class="mb-4">Projects</h2>

        {{-- Filter Buttons --}}
        <div class="btn-group mb-4" role="group" aria-label="Filter projects">
            <button type="button" class="btn btn-outline-primary filter-btn" data-filter="all">All</button>
            <button type="button" class="btn btn-outline-primary filter-btn"
                data-filter="development">Development</button>
            <button type="button" class="btn btn-outline-primary filter-btn" data-filter="data-analysis">Data
                Analysis</button>
        </div>


        <div class="container project-card-container">
            <div class="row g-3 justify-content-center">
                {{-- Iterate through projects --}}
                @foreach ($projects as $project)
                    {{-- Filtering by project type using tags --}}
                    <div class="col-md-3 project-card" data-tags="{{ $project->tags }}">
                        <div class="card mb-4 shadow-sm h-100">
                            @if ($project->images->isNotEmpty())
                                <img src="{{ asset($project->images->first()->path) }}" class="card-img-top"
                                    alt="{{ $project->name }}">
                            @else
                                {{-- Add default image --}}
                                <img src="images/placeholder.JPEG" class="card-img-top shadow-lg" alt="Default Image">
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

                    {{-- Modal displaying additional details and images for each project --}}
                    @include('project-modal')

                @endforeach
            </div>
        </div>
    </section>

    @include('contact-form')

    @include('success-modal')
    
@endsection