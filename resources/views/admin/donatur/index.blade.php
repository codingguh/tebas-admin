@extends('layouts.app', ['title' => 'Donatur - Admin'])

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="row mb-3">
        {{-- <div class="col">
            <button  class="btn btn-primary">
               <a class="text-white" href="{{ route('admin.category.create') }}">TAMBAH</a>
            </button>
        </div> --}}

        <div class="col-8">
            <form action="{{ route('admin.category.index') }}" method="GET">
            <div class="input-group input-group-merge">
                <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search..."
                  aria-label="Search..."
                  aria-describedby="basic-addon-search31" />
              </div>
            </form/>
          </div>
    </div>
    <div class="card card-shadow mx-auto">
        <div class="card">
            {{-- <h6 class="card-header">Donatur</h6> --}}

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Donatur</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($donaturs as $donatur)
                        <tr class="border bg-white">
    
                            <td class="px-16 py-2 flex justify-center">
                                {{ $donatur->name }}
                            </td>
                            <td class="px-16 py-2">
                                {{ $category->email }}
                            </td>
                        </tr>
                    @empty
                        <div class="bg-red-500 text-white text-center p-3 rounded-sm shadow-md">
                            Data Belum Tersedia!
                        </div>
                    @endforelse
                    </tbody>
                </table>
                @if ($donaturs->hasPages())
                    <div class="bg-white p-3">
                        {{ $donaturs->links('vendor.pagination.tailwind') }}
                    </div>
                @endif
            </div>
        </div>
</main>
@endsection