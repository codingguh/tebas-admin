
<div style="width: 70%" class="offcanvas offcanvas-end" tabindex="-1" id="offCanvasTambahCampaign" aria-labelledby="offCanvasTambahCampaignLabel">
  <div class="offcanvas-header">
    <h5 id="offCanvasTambahCampaignLabel">Tambah Campaign</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="p-6 bg-white rounded-md shadow-md"> 
        
        <form action="{{ route('admin.campaign.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-6 mt-4">
                <div class='row mb-3'>
                  <div class="col">
                    <label for="formFile" class="form-label">Judul Campaign</label>
                    <input class="form-control" type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Judul Campaign" />
                    @error('title')
                        <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{ $message }}</p>
                            </div>
                        </div>
                    @enderror
                  </div>
                  <div class="col">
                    <label for="formFile" class="form-label">Kategori</label>
                    <select id="defaultSelect" class="form-select" name="category_id">
                        @foreach($categories as $category)
                           <option class="py-1" value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                    @error('category_id')
                        <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{ $message }}</p>
                            </div>
                        </div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="formFile" class="form-label">Target Donation</label>
                        <input class="form-control"  id="target_donation" type="number" name="target_donation" value="{{ old('target_donation') }}" placeholder="Target Donasi, Ex: 10000000" />
                        @error('target_donation')
                        <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{ $message }}</p>
                            </div>
                        </div>
                    @enderror
                    </div>
                    <div class="col">
                        <label class="form-label" for="name">Tanggal Berakhir</label>
                        <input class="form-control" type="date" name="max_date" value="{{ old('max_date') }}" id="html5-date-input" />
                    
                        @error('max_date')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label" >Photo Campaign</label>
                    <input class="form-control" type="file" id="image" name="image" />
                    @error('image')
                    <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                @enderror
                  </div>

               
                {{-- <div>
                    <label class="text-gray-700" for="name">KATEGORI</label>
                    <select class="w-full border bg-gray-200 focus:bg-white rounded px-3 py-2 outline-none" name="category_id">
                        @foreach($categories as $category)
                            <option class="py-1" value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                   
                </div> --}}

                <div>
                    <label class="text-gray-700" for="name">DESKRIPSI</label>
                    <textarea name="description" rows="5">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{ $message }}</p>
                            </div>
                        </div>
                    @enderror
                </div>
            </div>

            <div class="flex justify-start mt-4">
                <button type="submit" class="px-4 py-2 btn btn-primary bg-gray-600 text-white ">SIMPAN</button>
            </div>
        </form>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.0/tinymce.min.js"></script>
<script>
    tinymce.init({selector:'textarea'});
</script>