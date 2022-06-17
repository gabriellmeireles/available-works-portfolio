@extends('layouts.full')
@section('title', 'PORTFÓLIO')


@section('content')
    <main>
        <div class="d-flex justify-content-end">
            <a href="#" data-bs-toggle="modal" data-bs-target="#categoryCreate" class="text-decoration-none">
                <i class="bi bi-plus-square fs-4 text-success">
                    <small class="px-2">Add Novo</small>
                </i>
            </a>
        </div>
        

        <div class="album py-4 bg-white">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-5">
                    @if($categories->count())    
                        @foreach($categories as $category)
                            <div class="col">
                                <div class="card shadow-sm">
                                    @if($category->image)
                                        <img src="{{ $destination.$category->image }}" alt="{{ $category->name }}"> 
                                    @else
                                        <img src=" {{ asset('assets/img/image-not-found.jpg') }} " alt="Image not found">
                                    @endif
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-text pt-3 {{ $category->status != 1 ? 'text-danger' : ''}}"><strong>{{ strtoupper($category->name) }}</strong></p>
                                            <small class="text-muted">{{ $categories->count() }}</small> {{-- ESSE COUNT SERÁ NA TABELA 'SERIES' --}}
                                        </div>
                                        <div class="d-flex justify-content-end align-items-center fs-4">
                                            <a href="#" data-category="{{ $category }}" data-action="{{ route('category.update', $category->id) }}" data-bs-toggle="modal" data-bs-target="#categoryEdit" class="px-2 text-success"><i class="bi bi-pencil-square"></i></a>
                                            <a href="#" data-category="{{ $category }}" data-action="{{ route('category.delete', $category->id) }}" data-bs-toggle="modal" data-bs-target="#categorySoftDelete" class="px-2 text-danger"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                    Não há obras disponíveis para venda no momento!
                    @endif
                </div>
            </div>
        </div>
    </main>

    {{------------------- MODALS --------------------}}

    @include('/available/categories/create')
    @if(isset($category))
        @include('/available/categories/edit')
        @include('/available/categories/delete')
    @endif

    {{----------------- END MODALS ------------------}}
@endsection