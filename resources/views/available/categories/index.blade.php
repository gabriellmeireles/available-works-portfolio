@extends('layouts.full')
@section('title', 'PORTFÓLIO')


@section('content')
    <main>
        <a href="#" data-bs-toggle="modal" data-bs-target="#categoryCreate">Adicionar Item</a>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">

                    <div class="col-6 mb-4">
                        <div class="card shadow-sm">
                            <img src=" {{ asset('assets/img/image-not-found.jpg') }} " alt="">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="card-text pt-3"><strong>PRINTURA</strong></p>
                                    <small class="text-muted">9 series</small>
                                </div>
                                <div class="d-flex justify-content-end align-items-center">
                                    <span class="px-1">Editar</span>
                                    <span class="px-1">Apagar</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 mb-4">
                        <div class="card shadow-sm">
                            <img src=" {{ asset('assets/img/image-not-found.jpg') }} " alt="">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="card-text pt-3"><strong>PRINTURA</strong></p>
                                    <small class="text-muted">9 series</small>
                                </div>
                                <div class="d-flex justify-content-end align-items-center">
                                    <span class="px-1">Editar</span>
                                    <span class="px-1">Apagar</span>
                                </div>
                            </div>
                        </div>
                    </div>
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