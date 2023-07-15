@extends('layout.master')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-grid gap-2">

                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $page_title }}</h5>
                        <form id="uploadForm" action="{{ route('update-produk', $produk->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Nama Produk" value="{{ $produk->nama }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="harga" name="harga"
                                        placeholder="Harga" value="{{ $produk->harga }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="gambarInput" class="col-sm-2 col-form-label">Gambar Upload</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="gambarInput"
                                            placeholder="Pilih Gambar" name="gambar[]" multiple>
                                        <button type="button" class="input-group-text" id="tambah_gambar">Tambah
                                            gambar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div id="gambarList" class="col-sm-12 row align-items-start" style="list-style-type: none;">
                                    @foreach ($produk->gambar as $gambar)
                                        <div class="col">
                                            <img src="{{ url('/') }}{{ Storage::url($gambar->path) }}"
                                                alt="Gambar Upload" style="max-width: 200px; margin: 10px;">
                                            <button type="button" data-id="{{ $gambar->id }}"
                                                class="btn btn-outline-danger btn-sm delete-gambar"><i
                                                    class="bi bi-trash-fill"></i></button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" name="description" id="description">{{ $produk->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Kategori</legend>
                                <div class="col-sm-10">
                                    @foreach ($kategori as $val)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="{{ $val->id }}"
                                                name="kategori[]" value="{{ $val->id }}"
                                                {{ in_array($val->id, $produk->kategori->pluck('id')->toArray()) ? 'checked' : '' }}>
                                            <label class="form-check-label"
                                                for="{{ $val->id }}">{{ $val->kategori }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                            value="aktif" {{ $produk->status === 'aktif' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="gridRadios1">Aktif</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="gridRadios2"
                                            value="tidak_aktif" {{ $produk->status === 'tidak_aktif' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="gridRadios2">Tidak Aktif</label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('custom-scripts')
    <script>
        const tambahGambarBtn = document.getElementById('tambah_gambar');
        const gambarInput = document.getElementById('gambarInput');
        const gambarList = document.getElementById('gambarList');
        const uploadForm = document.getElementById('uploadForm');
        const uploadedImages = [];

        tambahGambarBtn.addEventListener('click', function() {
            if (gambarInput.files && gambarInput.files.length > 0) {
                for (let i = 0; i < gambarInput.files.length; i++) {
                    const file = gambarInput.files[i];
                    const fileReader = new FileReader();

                    fileReader.onload = function(e) {
                        const imgElement = document.createElement('img');
                        imgElement.src = e.target.result;
                        imgElement.alt = 'Gambar Upload';
                        imgElement.style.maxWidth = '200px';
                        imgElement.style.margin = '10px';

                        const imageContainer = document.createElement('div');
                        imageContainer.classList.add('col');
                        imageContainer.appendChild(imgElement);

                        // Create delete button
                        const deleteButton = document.createElement('button');
                        deleteButton.innerHTML = '<i class="bi bi-trash-fill"></i>';
                        deleteButton.classList.add('btn', 'btn-outline-danger', 'btn-sm', 'delete-gambar');
                        deleteButton.addEventListener('click', function() {
                            // Remove the image and file from the list
                            imageContainer.remove();
                            uploadedImages.splice(uploadedImages.indexOf(file), 1);
                        });
                        imageContainer.appendChild(deleteButton);

                        gambarList.appendChild(imageContainer);

                        uploadedImages.push(file);
                    };

                    fileReader.readAsDataURL(file);
                }
                gambarInput.value = null; // Reset the input field
            }
            console.log(uploadedImages);
        });

        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-gambar');

            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    const imageContainer = button.parentNode;
                    const imgElement = imageContainer.querySelector('img');
                    const src = imgElement.src;

                    // Remove the image container from the list
                    imageContainer.remove();

                    // Remove the image from the uploadedImages array
                    const index = uploadedImages.findIndex(function(image) {
                        return image.src === src;
                    });
                    if (index !== -1) {
                        uploadedImages.splice(index, 1);
                    }

                    const id = button.getAttribute('data-id');
                    console.log(id);

                    // Add the CSRF token to the AJAX request headers
                    const token = document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content');
                    const headers = {
                        'X-CSRF-TOKEN': token,
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                    };

                    // Send the AJAX request
                    fetch('{{ url('admin/produk/hapus_gambar') }}', {
                            method: 'DELETE',
                            headers: headers,
                            body: JSON.stringify({
                                id: id
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                });
            });
        });



        uploadForm.addEventListener('submit', function(event) {
            event.preventDefault();

            // Prepare the form data
            const formData = new FormData(uploadForm);

            // Add the uploaded images to the form data
            for (let i = 0; i < uploadedImages.length; i++) {
                formData.append('gambar_diupload[]', uploadedImages[i]);
            }

            // Perform the file upload using Ajax or fetch API
            fetch('{{ route('update-produk', $produk->id) }}', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // Handle the response from the server
                    if (data.success) {
                        swal({
                                text: data.info,
                                icon: 'success',
                                timer: 800,
                                buttons: false,
                            })
                            .then(() => {
                                window.location.href = '{{ url('admin/produk/produk') }}';
                            });
                    } else {
                        console.error('Upload failed');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    </script>
@endpush
