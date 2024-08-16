@extends('layouts.app', ['title' => 'Tambah Kategori - Admin'])

@section('content')

<div class="card">
    <div class="card-header">
        <h4 class="text-lg text-gray-700 font-semibold capitalize">{{ isset($category) ? 'Edit' : 'Tambah' }} Campaign</h4>
    </div>
    <div class="card-body">
        <div class="p-6 bg-white rounded-md shadow-md">
            <hr class="mt-4">
            <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($category))
                    @method('PUT')
                @endif
                <div class="grid grid-cols-1 gap-6 mt-4">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar</label>
                        <input class="form-control" type="file" name="image" id="image" />
                        @error('image')
                        <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{ $message }}</p>
                            </div>
                        </div>
                        @enderror
                        @if(isset($category) && $category->image)
                            <img src="{{ asset('storage/categories/' . $category->image) }}" alt="Campaign Image" class="mt-2" width="150">
                        @endif
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="name" class="form-label">Nama Kategori</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name', $category->name ?? '') }}" placeholder="Nama Kategori" />
                            @error('name')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex justify-start mt-4">
                    <button type="submit" class="px-4 py-2 btn btn-primary bg-gray-600 text-white ">{{ isset($category) ? 'Update' : 'Simpan' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.0/tinymce.min.js"></script>
<script>
    tinymce.init({selector:'textarea'});
</script>
@endsection
