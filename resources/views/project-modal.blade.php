{{-- Modal for each project --}}
<div class="modal fade" id="projectModal{{ $project->id }}" tabindex="-1"
    aria-labelledby="projectModalLabel{{ $project->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="projectModalLabel{{ $project->id }}">{{ $project->name }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                {{-- Carousel for project images --}}
                <div id="carousel{{ $project->id }}" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($project->images as $index => $image)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ asset($image->path) }}" class="d-block w-100 shadow"
                                    alt="{{ $project->name }}">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $project->id }}"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $project->id }}"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                {{-- Project details --}}
                <p class="mt-3">{{ $project->details }}</p>
                <p class="mt-3"><strong>Technologies Used:</strong> {{ $project->technologies }}
                </p>
                <p class="project-link mt-3">
                    {{-- 'blank' opens in a new tab; noopener noreferrer prevents new page from gaining access to original page window to mitigate phishing attacks --}}
                    <a href="{{ $project->url }}" target="_blank" rel="noopener noreferrer"><strong>Link</strong></a>
                </p>

            </div>
        </div>
    </div>
</div>
