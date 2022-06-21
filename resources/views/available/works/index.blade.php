@extends('layouts.full')
@section('title', $serie->name)


@section('content')
    <main>
        @auth
            <div class="d-flex justify-content-end">
                <a href="#" data-bs-toggle="modal" data-bs-target="#workCreate" class="text-decoration-none">
                    <i class="bi bi-plus-square fs-4 text-success">
                        <small class="px-2">Add Novo</small>
                    </i>
                </a>
            </div>
        @endauth
        
        <div class="container py-4">
            @if ($works->count())
                @foreach ($works as $work)
                    <div class="row justify-content-center work" data-aos="fade-down" data-aos-delay="250">
                        <div class="mb-1 container-fluid col-md-7">
                            @if ($work->image)
                                <p class="d-block">
                                    <img src="{{ $destination.'/'.$work->image }}" alt="{{ $work->title }}" class="w-100 mb-4 img-fluid">
                                </p> 
                            @else
                                <p class="d-block">
                                    <img src=" {{ asset('assets/img/image-not-found.jpg') }} " alt="Image not found" class="w-100 mb-4 img-fluid">
                                </p>
                            @endif
                            
                        </div>
                        <div class="mb-7 container-fluid col-md-5">
                            <h4 class="mb-xl-3 mb-3 fw-5">
                                {{ $work->title }}
                            </h4>
                            <div class="row justify-content-between mb-2">
                                <div class="col">
                                    <p class="text-start mb-1"><strong>Dimenssões:</strong> {{$work->width}}x{{$work->height}}cm</p>

                                    <p class="text-start mb-1"><strong>Ano:</strong> {{$work->year}}</p>

                                    <p class="text-start mb-1"><strong>Técnica:</strong> {{$work->technique->name}}</p>
                                    @if ($work->edition && $work->produced)
                                        <p class="text-start mb-1"><strong>Tiragem:</strong> {{$work->edition}} / {{$work->produced}}</p>
                                    @endif

                                    <p class="text-start mb-1"><strong>Valor:</strong> R$ {{number_format($work->price, 2, ',','.')}}</p>
                                </div>
                            </div>
                            @auth
                                <div class="d-flex justify-content-start fs-4">
                                    <a href="#" data-work="{{ $work }}" data-action="{{ route('work.update', $work->id) }}" data-bs-toggle="modal" data-bs-target="#workEdit" class="px-2 text-success"><i class="bi bi-pencil-square"></i></a>
                                    <a href="#" data-work="{{ $work }}" data-action="{{ route('work.delete', $work->id) }}" data-bs-toggle="modal" data-bs-target="#workSoftDelete" class="px-2 text-danger"><i class="bi bi-trash"></i></a>
                                </div>
                            @endauth
                        </div>
                    </div>
                @endforeach
            @else
                Essa série não há obras disponíveis!
            @endif
        </div> 
    </main>

    {{-- ----------------- MODALS ------------------ --}}

    @include('/available/works/create')
    @if (isset($serie))
        @include('/available/works/edit')
        {{-- @include('/available/works/delete') --}}
    @endif

    {{-- --------------- END MODALS ---------------- --}}
@endsection
