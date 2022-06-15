@extends('layouts.full')
@section('title', 'TÉCNICA')


@section('content')
    <main>
        <div class="d-flex justify-content-end">
            <a href="#" data-bs-toggle="modal" data-bs-target="#techniqueCreate" class="text-decoration-none"><i class="bi bi-plus-square fs-4 text-success"><small class="px-2">Add Novo</small></i></a>
        </div>
        
        <div class="album py-4 bg-white">
            <div class="container">
                <div class="row ">
                    @if ($techniques->count())
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>ID</th>
                                    <th>NOME</th>
                                    <th>ACRÔNIMO</th>
                                    <th>STATUS</th>
                                    <th>AÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($techniques as $technique)
                                    <tr>
                                        <td scope="row">{{ $technique->id }}</td>
                                        <td>{{ $technique->name }}</td>
                                        <td>{{ $technique->acronym }}</td>
                                        <td>{{ $technique->status }}</td>
                                        <td class="fs-5">
                                            <i class="bi bi-pencil-square px-2 text-success"></i> 
                                            <i class="bi bi-trash px-2 text-danger"></i>
                                        </td>
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table> 
                    @else
                        Não há técnicas cadastradas ate o momento! 
                    @endif
                </div>
            </div>
        </div>
    </main>

    {{------------------- MODALS --------------------}}
    @include('/available/techniques/create')
    @if(isset($category))
        @include('/available/categories/edit')
        @include('/available/categories/delete')
    @endif

    {{----------------- END MODALS ------------------}}
@endsection