@extends('layout')

@section('title', $project->name)

@section('content')
<section class="my-5">
    <div class="container">
        <h2 class="mb-4">{{ $project->name }}</h2>  {{-- Project Name --}}
        <img src="{{ asset($project->image_path) }}" class="img-fluid mb-4" alt="{{ $project->name }}">  {{-- Project Image --}}
        <p><strong>Description:</strong> {{ $project->description }}</p>  {{-- Project Description --}}
        {{-- <p><strong>Details:</strong> {{ $project->details }}</p>  Additional Project Details --}}
        
        @if($project->url)
        <p><a href="{{ $project->url }}" target="_blank" class="btn btn-primary">Visit Project</a></p>  {{-- Link to Project --}}
        @endif

        <a href="{{ route('home') }}" class="btn btn-secondary mt-4">Back to Portfolio</a>  {{-- Link back to the portfolio --}}
    </div>
</section>
@endsection
