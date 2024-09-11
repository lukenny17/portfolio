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

    {{-- About Me --}}
    <section id="about" class="about-me my-5 pt-3 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <!-- Add a profile image -->
                    <img src="{{ asset('images/mountains.JPEG') }}" class="profile-image" alt="Profile Image">
                </div>
                <div class="col-md-8">
                    <!-- Enhance the text with some formatting -->
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
                    <!-- Optional: Add some icons or a call-to-action link -->
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

        <!-- Filter Buttons -->
        <div class="btn-group mb-4" role="group" aria-label="Filter projects">
            <button type="button" class="btn btn-outline-primary filter-button" data-filter="all">All</button>
            <button type="button" class="btn btn-outline-primary filter-button"
                data-filter="development">Development</button>
            <button type="button" class="btn btn-outline-primary filter-button" data-filter="data-analysis">Data
                Analysis</button>
        </div>


        <div class="container project-card-container">
            <div class="row g-3 justify-content-center">
                {{-- Iterate through projects --}}
                @foreach ($projects as $project)
                    {{-- Filtering by project type, add tags --}}
                    <div class="col-md-3 project-card" data-tags="{{ $project->tags }}">
                        <div class="card mb-4 shadow-sm h-100">
                            @if ($project->images->isNotEmpty())
                                <img src="{{ asset($project->images->first()->path) }}" class="card-img-top"
                                    alt="{{ $project->name }}">
                            @else
                                {{-- Add default image --}}
                                <img src="default/path/to/image.jpg" class="card-img-top shadow-lg" alt="Default Image">
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
                                                    <img src="{{ asset($image->path) }}" class="d-block w-100 shadow"
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
                                    <p class="mt-3"><strong>Technologies Used:</strong> {{ $project->technologies }}</p>
                                    <p class="project-link mt-3">
                                        {{-- 'blank' opens in a new tab; noopener noreferrer prevents new page from gaining access to original page window to mitigate phishing attacks --}}
                                        <a href="{{ $project->url }}" target="_blank"
                                            rel="noopener noreferrer"><strong>Link</strong></a>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- Contact Section --}}
    <section id="contact" class="contact-section my-5 pt-1 bg-white">
        <div class="container">
            <h2 class="mb-4 text-center">Get in Touch</h2>
            <div class="row">
                <!-- Contact Form spanning full width -->
                <div class="col-12">
                    <form action="{{ route('portfolio.sendMessage') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Message Sent!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Thank you for reaching out! I will get back to you as soon as possible.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-button');
        const projectCards = document.querySelectorAll('.project-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.getAttribute('data-filter');
                projectCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-tags').includes(
                            filter)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Check for success message in the session and trigger the modal
        @if (session('success'))
            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        @endif
    });
</script>
