@extends('layouts.app')
@section('title', 'Categories list')
@section('content')
<div class="bg-table home rounded mx-3 mx-sm-5 p-4">
    <h1 class="text-center">Categories table</h1>
    <div class="row mb-3">
        <div class="col d-flex justify-content-center justify-content-md-end">
            <a href="javascript:void(0);" class="create btn btn-primary" data-toggle="modal"
                data-target="#CategoryCreate"><i class="bi-plus-circle mr-2"></i>Create Category</a>
        </div>
    </div>
    <div class="table-responsive">
        <table id="mytable" data-order='[[ 0, "asc" ]]'>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Questions</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($category as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ count($item->CategoryQuestions($item->id)) }}</td>

                    <td>
                        <a href="javascript:void(0);" class="edit btn btn-primary" data-toggle="modal"
                            data-target="#CategoryEdit" onclick="editCategory({{ $item }})"
                            title="edit this category"><i class="bi-pencil-square p-1"></i></a>

                        {{-- <a href="javascript:void(0);" class="delete btn btn-danger"
                            onclick="deleteCategory({{ $item->id }})"><i class="bi-trash p-1"></i>
                        <form id="delete" action="#" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                        </a> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('layouts.components.partials.datatable')

@include('layouts.components.partials.jquery.jquery-confirm')

@include('layouts.components.partials.jquery.jquery-validate')

@include('pages.categories.modals.create')

@include('pages.categories.modals.update')

@include('layouts.components.partials.dropify')

@include('pages.categories.scripts.categories')

@endsection
