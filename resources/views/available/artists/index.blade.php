@extends('layouts.full')
@section('title', 'ARTISTAS')


@section('content')
    <main>
        <div class="d-flex justify-content-end">
            <a href="#" data-bs-toggle="modal" data-bs-target="#artistCreate" class="text-decoration-none">
                <i class="bi bi-plus-square fs-4 text-success">
                    <small class="px-2">Add Novo</small>
                </i>
            </a>
        </div>
        

        <div class="album py-4 bg-white">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-5">
                    @if($artists->count())    
                        @foreach($artists as $artist)
                            <div class="col">
                                <div class="card mb-3 img">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{$destination.$artist->folder.'/'.$artist->photo}}" class="img-fluid rounded-start" alt="{{$artist->artistic_name}}">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$artist->artistic_name}}</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <p class="card-text"><small class="text-muted">obras: {{$artist->count()}}</small></p>
                                            </div>
                                            <div class="d-flex justify-content-end align-items-end fs-4">
                                                <a href="#" data-artist="{{ $artist }}" data-action="{{ route('artist.update', $artist->id) }}" data-bs-toggle="modal" data-bs-target="#artistEdit" class="px-2 text-success"><i class="bi bi-pencil-square"></i></a>
                                                <a href="{{$artist->id}}" data-artist="{{ $artist }}" data-action="{{ route('artist.delete', $artist->id) }}" data-bs-toggle="modal" data-bs-target="#artistSoftDelete" class="px-2 text-danger"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                    Não há artistas cadastrados no momento!
                    @endif
                </div>
            </div>
        </div>
    </main>

    {{------------------- MODALS --------------------}}

    @include('/available/artists/create')
    @if(isset($artist))
        @include('/available/artists/edit')
        @include('/available/artists/delete')
    @endif

    {{----------------- END MODALS ------------------}} 
@endsection