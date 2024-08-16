@extends('layouts.app', ['title' => 'Campaign - Admin'])

@section('content')
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
        <div class="row mb-3">
            <div class="col">
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offCanvasTambahCampaign" aria-controls="offCanvasTambahCampaign">Tambah Campaign</button>

             @include('admin.campaign.edit')
              
            </div>

            <div class="col-8">
                <form action="{{ route('admin.campaign.index') }}" method="GET">
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
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Judul Campaign</th>
                                <th>Kategori</th>
                                <th>Target Donasi</th>
                                <th>Taggal Berakhir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($campaigns as $campaign)
                            <tr class="border bg-white">
        
                                <td class="px-5 py-2">
                                    {{ $campaign->title }}
                                </td>
                                <td class="px-16 py-2">
                                    {{ $campaign->category->name }}
                                </td>
                                <td class="px-16 py-2">
                                    {{ moneyFormat($campaign->target_donation) }}
                                </td>
                                <td class="px-16 py-2">
                                    {{ $campaign->max_date }}
                                </td>
                                <td class="px-10 py-2">
                                    <!-- Button to trigger off-canvas for editing a campaign -->
                                <button class="btn btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offCanvasEditCampaign" aria-controls="offCanvasEditCampaign" data-id="{{ $campaign->id }}">
                                    EDIT
                                </button>
                                    @include('admin.campaign.create')
                                    <button onClick="destroy(this.id)" id="{{ $campaign->id }}" class="btn btn-danger">HAPUS</button>
                                </td>
                            </tr>
                            @empty
                            <div class="bg-red-500 text-white text-center p-3 rounded-sm shadow-md">
                                Data Belum Tersedia!
                            </div>
                        @endforelse

                        </tbody>
                        
                    </table>
                    @if ($campaigns->hasPages())
                    <div class="bg-white p-3">
                        {{ $campaigns->links('vendor.pagination.tailwind') }}
                    </div>
                @endif
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
                        url: `/admin/campaign/${id}`,
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
