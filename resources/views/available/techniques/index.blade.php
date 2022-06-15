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
                        <table class="table table-bordered table-striped table-responsive">
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
                                        <td>{{ $technique->status == 1 ? 'Ativo' : 'Inativo' }}</td>
                                        <td class="fs-5">
                                            <a href="#" data-technique="{{ $technique }}" data-action="{{ route('technique.update', $technique->id) }}" data-bs-toggle="modal" data-bs-target="#techniqueEdit" class="px-2 text-success"><i class="bi bi-pencil-square"></i></a>
                                            <a href="#" data-technique="{{ $technique }}" data-action="{{ route('technique.delete', $technique->id) }}" data-bs-toggle="modal" data-bs-target="#techniqueSoftDelete" class="px-2 text-danger"><i class="bi bi-trash"></i></a>
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
    @if(isset($technique))
        @include('/available/techniques/edit')
        @include('/available/techniques/delete')
    @endif

    {{----------------- END MODALS ------------------}}
@endsection