@extends('layouts.app', ['title' => 'Campaign - Admin'])

@section('content')
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
        <div class="row mb-3">
            <div class="col">
                <button  class="btn btn-primary">
                   <a class="text-white" href="{{ route('admin.category.create') }}">TAMBAH</a>
                </button>
            </div>

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
                <h5 class="card-header">Kategeori</h5>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categories as $category)
                            <tr class="border bg-white">
        
                                <td class="px-16 py-2 flex justify-center">
                                    <img style="width:90px; height:90px" src="{{ $category->image }}" class="w-10 h-100 object-fit-cover rounded-full">
                                </td>
                                <td class="px-16 py-2">
                                    {{ $category->name }}
                                </td>
                                <td class="px-10 py-2 text-center">
                                    <a href="{{ route('admin.category.edit', $category->id) }}" style="padding:7px 15px;" class="btn btn-warning  rounded shadow-sm text-xs text-white focus:outline-none">EDIT</a>
                                    <button onClick="destroy(this.id)" id="{{ $category->id }}" style="outline: none; border:none; padding:7px 15px;" class="btn btn-danger  rounded shadow-sm text-xs text-white ">HAPUS</button>
                                </td>
                            </tr>
                        @empty
                            <div class="bg-red-500 text-white text-center p-3 rounded-sm shadow-md">
                                Data Belum Tersedia!
                            </div>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
    </main>
    <script>
        //ajax delete
        function destroy(id) {
            var id = id;
            var token = $("meta[name='csrf-token']").attr("content");

            Swal.fire({
                title: 'APAKAH KAMU YAKIN ?',
                text: "INGIN MENGHAPUS DATA INI!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'BATAL',
                confirmButtonText: 'YA, HAPUS!',
            }).then((result) => {
                if (result.isConfirmed) {
                    //ajax delete
                    jQuery.ajax({
                        url: `/admin/category/${id}`,
                        data: {
                            "id": id,
                            "_token": token
                        },
                        type: 'DELETE',
                        success: function(response) {
                            if (response.status == "success") {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'BERHASIL!',
                                    text: 'DATA BERHASIL DIHAPUS!',
                                    showConfirmButton: false,
                                    timer: 3000
                                }).then(function() {
                                    location.reload();
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'GAGAL!',
                                    text: 'DATA GAGAL DIHAPUS!',
                                    showConfirmButton: false,
                                    timer: 3000
                                }).then(function() {
                                    location.reload();
                                });
                            }
                        }
                    });
                }
            })
        }
    </script>
@endsection
