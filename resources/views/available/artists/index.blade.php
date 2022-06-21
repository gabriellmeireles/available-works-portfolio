@extends('layouts.full')
@section('title', 'ARTISTAS')


@section('content')
    <main>
        @auth
            <div class="d-flex justify-content-end">
                <a href="#" data-bs-toggle="modal" data-bs-target="#artistCreate" class="text-decoration-none">
                    <i class="bi bi-plus-square fs-4 text-success">
                        <small class="px-2">Add Novo</small>
                    </i>
                </a>
            </div>
        @endauth
        

        <div class="album py-4 bg-white">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-5">
                    @if($artists->count())    
                        @foreach($artists as $artist)
                            <div class="col">
                                <div class="card mb-3 artist">
                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <img src="{{$destination.$artist->folder.'/'.$artist->photo}}"  alt="{{$artist->artistic_name}}">
                                        </div>
                                        <div class="col-md-7 d-flex flex-column">
                                            <div class="card-body flex-column ">
                                                <h5 class="card-title">{{ $artist->artistic_name }}</h5>
                                                <p class="card-text">{{ $artist->about }}</p>
                                                
                                            </div>
                                            <div class="d-flex justify-content-end px-3">
                                                <p class="card-text"><small class="text-muted">series: {{$artist->series->count()}}</small></p>
                                            </div>
                                            @auth
                                                <div class="d-flex justify-content-end fs-4">
                                                    <a href="{{$artist->id}}" data-artist="{{ $artist }}" data-action="{{ route('artist.update', $artist->id) }}" data-bs-toggle="modal" data-bs-target="#artistEdit" class="px-2 text-success"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="{{$artist->id}}" data-artist="{{ $artist }}" data-action="{{ route('artist.delete', $artist->id) }}" data-bs-toggle="modal" data-bs-target="#artistSoftDelete" class="px-2 text-danger"><i class="bi bi-trash"></i></a>
                                                </div>
                                            @endauth
                                            <div class="d-flex justify-content-center pt-5 pb-1">
                                                <a class="text-decoration-none btn text-success" href="{{ route('series.index',['artist' => $artist->id]) }}"><strong>Catalago de Obras</strong></a>
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