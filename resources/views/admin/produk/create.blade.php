@extends('layout.master')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-grid gap-2">

                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Produk</h5>
                        <form action="{{ route('upload-produk') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Nama Produk">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="harga" name="harga"
                                        placeholder="Harga">
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
                                <ul id="gambarList" style="list-style-type: none;"></ul>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" name="description" id="description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Kategori</legend>
                                <div class="col-sm-10">
                                    @foreach ($kategori as $val)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="{{ $val->id }}"
                                                name="kategori[]" value="{{ $val->id }}">
                                            <label class="form-check-label" for="{{ $val->id }}">
                                                {{ $val->kategori }}
                                            </label>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                            value="aktif" checked="">
                                        <label class="form-check-label" for="gridRadios1">
                                            Aktif
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="gridRadios2"
                                            value="tidak_aktif">
                                        <label class="form-check-label" for="gridRadios2">
                                            Tidak Aktif
                                        </label>
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

        tambahGambarBtn.addEventListener('click', function() {
            if (gambarInput.files && gambarInput.files.length > 0) {
                for (let i = 0; i < gambarInput.files.length; i++) {
                    const fileReader = new FileReader();

                    fileReader.onload = function(e) {
                        const imgElement = document.createElement('img');
                        imgElement.src = e.target.result;
                        imgElement.alt = 'Gambar Upload';
                        imgElement.style.maxWidth = '200px'; /* Ukuran maksimum gambar */
                        imgElement.style.margin = '10px'; /* Jarak antara gambar */

                        const listItem = document.createElement('li');
                        listItem.appendChild(imgElement);
                        gambarList.appendChild(listItem);
                    };

                    fileReader.readAsDataURL(gambarInput.files[i]);
                }
            }
        });
    </script>
@endpush
