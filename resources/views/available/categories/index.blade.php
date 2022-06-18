@extends('layouts.full')
@section('title', 'CATEGORIAS')


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
                <div class="row ">
                    @if ($categories->count())
                        <table class="table table-bordered table-striped table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>ID</th>
                                    <th>NOME</th>
                                    <th>SLUG</th>
                                    <th>STATUS</th>
                                    <th>QTD DE SERIES</th>
                                    <th>AÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td scope="row">{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>{{ $category->status == 1 ? 'Ativo' : 'Inativo' }}</td>
                                        <td>{{ $category->series->count() }}</td>
                                        <td class="fs-5">
                                            <a href="#" data-category="{{ $category }}" data-action="{{ route('category.update', $category->id) }}" data-bs-toggle="modal" data-bs-target="#categoryEdit" class="px-2 text-success"><i class="bi bi-pencil-square"></i></a>
                                            <a href="#" data-category="{{ $category }}" data-action="{{ route('category.delete', $category->id) }}" data-bs-toggle="modal" data-bs-target="#categorySoftDelete" class="px-2 text-danger"><i class="bi bi-trash"></i></a>
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

    @include('/available/categories/create')
    @if(isset($category))
        @include('/available/categories/edit')
        @include('/available/categories/delete')
    @endif

    {{----------------- END MODALS ------------------}}
@endsection