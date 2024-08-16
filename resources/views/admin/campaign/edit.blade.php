

<!-- Off-canvas component -->
<div style="width: 70%" class="offcanvas offcanvas-end" tabindex="-1" id="offCanvasEditCampaign" aria-labelledby="offCanvasEditCampaignLabel">
    <div class="offcanvas-header">
        <h5 id="offCanvasEditCampaignLabel">Edit Campaign</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="p-6 bg-white rounded-md shadow-md"> 
            <hr class="mt-4">
            <form id="editForm" method="POST" action="">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-6 mt-4">
                    <div class='row mb-3'>
                        <div class="col">
                            <label for="title" class="form-label">Judul Campaign</label>
                            <input class="form-control" type="text" id="title" name="title" placeholder="Judul Campaign" />
                            @error('title')
                                <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                    <div class="px-4 py-2">
                                        <p class="text-gray-600 text-sm">{{ $message }}</p>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="category_id" class="form-label">Kategori</label>
                            <select id="category_id" class="form-select" name="category_id">
                                @foreach($categories as $category)
                                   <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                            <label for="target_donation" class="form-label">Target Donation</label>
                            <input class="form-control" id="target_donation" type="number" name="target_donation" placeholder="Target Donasi, Ex: 10000000" />
                            @error('target_donation')
                                <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                    <div class="px-4 py-2">
                                        <p class="text-gray-600 text-sm">{{ $message }}</p>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label class="form-label" for="max_date">Tanggal Berakhir</label>
                            <input class="form-control" type="date" id="max_date" name="max_date" />
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
                        <label for="image" class="form-label">Photo Campaign</label>
                        <input class="form-control" type="file" id="image" name="image" />
                        @error('image')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label class="text-gray-700" for="description">DESKRIPSI</label>
                        <textarea id="description" name="description" rows="5"></textarea>
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
                    <button type="submit" class="px-4 py-2 btn btn-primary bg-gray-600 text-white">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('[data-bs-toggle="offcanvas"]');
        
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const id = this.dataset.id;
                fetch(`/admin/campaign/${id}`)
                    .then(response => response.json())
                    .then(data => {
                        // Populate form with fetched data
                        const form = document.querySelector('#editForm');
                        form.action = `/admin/campaign/${id}`;
                        
                        document.querySelector('#title').value = data.title;
                        document.querySelector('#category_id').value = data.category_id;
                        document.querySelector('#target_donation').value = data.target_donation;
                        document.querySelector('#max_date').value = data.max_date;
                        document.querySelector('#description').value = data.description;
                    })
                    .catch(error => console.error('Error fetching campaign data:', error));
            });
        });
    });
</script>