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
                        <form id="uploadForm" action="{{ route('update-paketcctv', $paketcctv->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Paket</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Nama Paket" value="{{ $paketcctv->nama }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="harga" name="harga"
                                        placeholder="Harga" value="{{ $paketcctv->harga }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="path" class="col-sm-2 col-form-label">Gambar Upload</label>
                                <div class="col-md-8 col-lg-8">
                                    <div class="pt-2 mb-4">
                                        <input class="form-control" type="file" id="path" name="path"
                                            accept="image/*">
                                        <small id="path_help" class="form-text"></small>
                                    </div>
                                    <div id="uploaded_image">
                                        <img src="{{ url('/') }}{{ Storage::url($paketcctv->path) }}" alt="Uploaded Image" class="col-md-12 col-lg-6 col-xl-4 mb-2">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="my-editor form-control" rows="12" name="description" id="description">{{ $paketcctv->description }}</textarea>
                                </div>
                            </div>
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var uploadedImageDiv = document.getElementById('uploaded_image');
        $(document).ready(function() {
            // JavaScript code to handle the image upload and display
            document.getElementById('path').onchange = function() {
                uploadedImageDiv.innerHTML = '';

                var file = this.files[0];
                var image = new Image();
                image.src = window.URL.createObjectURL(file);
                image.alt = 'Uploaded Image';
                image.className = 'col-md-12 col-lg-6 col-xl-4 mb-2';

                uploadedImageDiv.appendChild(image);
            };
        });
    </script>
    <script src="https://cdn.tiny.cloud/1/ntnf44xuwietuzyond0qbg8p2e6eqo90pzbi04o4j1jzeiqk/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        var url = "{{ url('') }}";
        var editor_config = {
            path_absolute: url + "/",
            selector: 'textarea.my-editor',
            relative_urls: false,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            file_picker_callback: function(callback, value, meta) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                    'body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document
                    .getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                if (meta.filetype == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.openUrl({
                    url: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no",
                    onMessage: (api, message) => {
                        callback(message.content);
                    }
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@endpush
