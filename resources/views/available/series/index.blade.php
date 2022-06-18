@extends('layouts.full')
@section('title', 'SÉRIES')


@section('content')
    <main>
        <div class="d-flex justify-content-end">
            <a href="#" data-bs-toggle="modal" data-bs-target="#serieCreate" class="text-decoration-none">
                <i class="bi bi-plus-square fs-4 text-success">
                    <small class="px-2">Add Novo</small>
                </i>
            </a>
        </div>
        <div class="album py-4 bg-white">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-5">
                    @if($series->count())    
                        @foreach($series as $serie)
                            <div class="col">
                                <a class="text-decoration-none" href="{{ route('works.index', ['serie' => $serie->slug, 'artist' => $serie->artist->slug]) }}">
                                    <div class="card shadow-sm">
                                        @if ($serie->cover_image)
                                            <img src="{{ asset($serie->folder.'/'.$serie->cover_image) }}" alt="" class="mb-4 img-fluid"> 
                                        @else
                                            <img src="{{ asset('assets/img/image-not-found.jpg') }}" alt="" class="mb-4 img-fluid"> 
                                        @endif
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="card-text pt-2 {{ $serie->status != 1 ? 'text-danger' : ''}}" ><strong>{{ strtoupper($serie->name) }}</strong></p>
                                                <small class="text-muted">obras: {{ $serie->works->count() }}</small>
                                            </div>
                                    
                                            <div class="d-flex justify-content-end align-items-center fs-4">
                                                <a href="{{ route('serie.update', $serie->id) }}" data-serie="{{ $serie }}" data-action="{{ route('serie.update', $serie->id) }}" data-bs-toggle="modal" data-bs-target="#serieEdit" class="px-2 text-success"><i class="bi bi-pencil-square"></i></a>
                                                <a href="{{ route('serie.update', $serie->id) }}" data-serie="{{ $serie }}" data-action="{{ route('serie.delete', $serie->id) }}" data-bs-toggle="modal" data-bs-target="#serieSoftDelete" class="px-2 text-danger"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @else
                    Não há Series cadastradas no momento!
                    @endif
                </div>
            </div>
        </div>
    </main>

    {{------------------- MODALS --------------------}}

    @include('/available/series/create')
    @if(isset($serie))
        @include('/available/series/edit')
        @include('/available/series/delete')
    @endif

    {{----------------- END MODALS ------------------}}
@endsection