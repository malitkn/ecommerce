@extends('back.layouts.master')
@section('title', 'Kategoriler')
@section('content')
    <div class="page-header">
        <h3 class="page-title"> Kategoriler </h3>
        {{ Breadcrumbs::render('categories') }}
    </div>
    <div class="row">
        <div class="col-lg-12 animate__animated animate__fadeIn animate__slow grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">

                        </div>
                        <x-back.table :table-type="'table-hover'" :headers="['Adı', 'Url', 'Oluşturulma Tarihi', 'İşlemler']">
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a class="text-decoration-none" href="{{ route('admin.categories.edit', $category->id) }}">
                                            <x-back.button type="button" color="warning" class="btn-rounded btn-icon">
                                                <i class="mdi mdi-border-color"></i>
                                            </x-back.button>
                                        </a>

                                        <x-back.button wire:click="confirmDelete({{ $category->id }})" type="button"
                                                       color="danger" class="btn-rounded btn-icon">
                                            <i class="mdi mdi-delete"></i>
                                        </x-back.button>
                                    </td>
                                </tr>
                            @endforeach
                        </x-back.table>

                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
    </div>
@endsection

