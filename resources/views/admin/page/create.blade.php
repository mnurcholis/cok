@extends('layout.master')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-grid gap-2">

                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Page</h5>
                        <form>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title">
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Desc</label>
                                <textarea name="desc" class="my-editor form-control" id="desc" cols="30" rows="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/dropzone.css"
        integrity="sha256-6X2vamB3vs1zAJefAme/aHhUeJl13mYKs3VKpIGmcV4=" crossorigin="anonymous">
@endpush
@push('custom-scripts')
    <script src="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/dropzone.js"
        integrity="sha256-IXyEnLo8FpsoOLrRzJlVYymqpY29qqsMHUD2Ah/ttwQ=" crossorigin="anonymous"></script>

    <script src="https://cdn.tiny.cloud/1/vlildav9tbxj7krj1ao5v3cuyxkx8p1j8kqfeo8nj5jgac9w/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        var editor_config = {
            path_absolute: "{{ url('') }}/",
            selector: 'textarea.my-editor',
            relative_urls: false,
            height: '600px',
            plugins: [
                "advlist autolink autosave lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern"
            ],
            toolbar: "restoredraft insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
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
    <!-- end tiny mce editor -->
    <script>
        var uploadedDocumentMap = {}
        let token = $("meta[name='csrf-token']").attr("content");
        Dropzone.options.myAwesomeDropzone = {

            url: `{{ route('file_image.store') }}`,
            // maxFilesize: 2, // MB
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function(file, response) {
                $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
                uploadedDocumentMap[file.name] = response.name
                uploadedDocumentMap[file.path] = response.path
            },
            removedfile: function(file) {
                file.previewElement.remove()
                var name = ''
                var path = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedDocumentMap[file.name]
                    path = uploadedDocumentMap[file.path]
                }
                $('form').find('input[name="document[]"][value="' + name + '"]').remove();

                // alert(name);
                console.log(path);
                console.log(name);
                $.ajax({
                    url: `/admin/file_image/${name}`,
                    type: "DELETE",
                    cache: false,
                    data: {
                        "_token": token
                    },
                    success: function(response) {
                        console.log(response);
                        //show success message
                        // Swal.fire({
                        //     type: 'success',
                        //     icon: 'success',
                        //     title: `${response.message}`,
                        //     showConfirmButton: false,
                        //     timer: 3000
                        // });

                        //remove post on table
                        // $(`#index_${post_id}`).remove();
                    }
                });
            },
            init: function() {
                @if (isset($project) && $project->document)
                    var files = {!! json_encode($project->document) !!}
                    for (var i in files) {
                        var file = files[i]
                        this.options.addedfile.call(this, file)
                        file.previewElement.classList.add('dz-complete')
                        $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
                    }
                @endif
            }
        }
    </script>
@endpush
