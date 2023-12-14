{{-- @php
    use App\Function\Helper;
@endphp --}}

@extends('layouts.admin')

@section('content')

<div class="container my-5">

    <div class="card">
        <h5 class="card-header">{{ $project->name }}</h5>
        <div class="card-body">
            <img width="225" src="{{ asset("storage/" . $project->image) }}" alt="{{ $project->name }}">
            {{-- <p>{{ $project->image_original_name }}</p> --}}
            @if ($project->type)
                <li class="list-group-item"><b>Tipologia:</b> {{ $project->type->name }}</li>
            @endif
            <h5 class="card-title my-2">Durata progetto: {{ $project->project_duration }} giorni</h5>
            <p class="card-text">Descrizione: {{ $project->description }}</p>
            <a href=""{{ route("admin.projects.edit", $project) }}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
        </div>
    </div>

</div>
@endsection
