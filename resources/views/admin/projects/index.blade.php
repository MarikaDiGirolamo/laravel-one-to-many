@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @foreach ($projects as $project)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $project->image }}" class="card-img-top" alt="{{ $project->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text">{{ $project->content }}</p>
                            <a href="{{ $project->link }}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
