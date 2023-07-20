@extends('layout.master')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-grid gap-2">

                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Input Galeri</h5>
                        <form>
                            <div class="row mb-3">
                                <label for="name" class="col-lg-4 col-form-label">Name</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="name" id="name">
                                    <small id="name_help" class="form-text"></small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="path" class="col-md-4 col-lg-4 col-form-label">Gambar</label>
                                <div class="col-md-8 col-lg-8">
                                    <div class="pt-2 mb-4">
                                        <input class="form-control" type="file" id="path" name="path"
                                            accept="image/*">
                                        <small id="path_help" class="form-text"></small>
                                    </div>
                                    <div id="uploaded_image">
                                        <!-- The selected image will be displayed here -->
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" id="simpan" name="simpan">Simpan</button>
                                <button type="button" class="btn btn-secondary" id="batal"
                                    name="batal">Batal</button>
                            </div>
                        </form>
                        <h5 class="card-title">Daftar Galeri</h5>
                        <table class="table table-hover table-bordered" id="table_galeri">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 20%">Gambar</th>
                                    <th scope="col" style="width: 60%">Nama</th>
                                    <th scope="col" style="width:20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="modal fade" id="modal_delete_galeri" tabindex="-1" data-bs-backdrop="static" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Galeri ?? <b id="delete_name"></b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <input type="hidden" class="form-control" name="delete_id" id="delete_id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
                    <button type="button" class="btn btn-primary" id="delete" name="delete">Delete</button>
                </div>
            </div>
        </div>
    </div><!-- End Delete Links Name Modal-->
@endsection

@push('custom-scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table;
        var uploadedImageDiv = document.getElementById('uploaded_image');
        var id = "";
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

            table = $('#table_galeri').DataTable({
                processing: true,
                serverSide: true,
                lengthChange: false,
                paging: true,
                info: false,
                iDisplayLength: 5,
                order: [],
                ajax: "{{ route('galeri.list') }}",
                columns: [{
                        data: 'gambar',
                        name: 'gambar',
                        orderable: false,
                        searchable: false,
                    }, {
                        data: 'name',
                        name: 'name',
                        orderable: false,
                    },

                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                    },
                ]
            });
        });

        $('#add_kategori_new').on('shown.bs.modal', function() {
            $('#name').val('');
            $('#name_help').text('');
            $('#name').trigger('focus');
        })

        $(document).on("blur", "#name", function() {
            $('#name_help').text('');
        });

        $(document).on("click", "#batal", function() {
            uploadedImageDiv.innerHTML = '';
            $('#name').val('');
            $('#name_help').text('');
            $('#path').val('');
            $('#path_help').text('');
            id = "";
        });

        $(document).on("click", "#simpan", function() {
            var name = $('#name').val();
            var path = $('#path').val();

            if (name.trim() === '') {
                $('#name').trigger('focus');
                $('#name_help').text('Name is Empty!');
            } else if (path.trim() === '') {
                $('#path').trigger('focus');
                $('#path_help').text('Gambar is Empty!');
            } else {
                // Perform validation and call simpan() function
                simpan(name, path);
            }

        });

        function simpan(name, path) {
            var formData = new FormData();
            formData.append('name', name);

            if (id !== "") {
                formData.append('id', id);
            }

            if ($('#path').get(0).files.length > 0) {
                formData.append('path', $('#path').prop('files')[0]);
            }

            $.ajax({
                url: "{{ route('save.galeri') }}",
                type: 'POST',
                dataType: "json",
                data: formData,
                processData: false, // Important for FormData
                contentType: false, // Important for FormData
                beforeSend: function() {
                    // Disable buttons and show loading spinner
                    $("#batal").prop("disabled", true);
                    $("#simpan").prop("disabled", true);
                    $('#simpan').html(
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
                    );
                },
                success: function(result) {
                    // Handle the success response here
                    // console.log(result);
                    if (result.status == true) {
                        swal({
                            text: result.info,
                            icon: 'success',
                            timer: 800,
                            buttons: false,
                        }).then(() => {
                            table.ajax.reload();
                            uploadedImageDiv.innerHTML = '';
                            $('#name').val('');
                            $('#name_help').text('');
                            $('#path').val('');
                            $('#path_help').text('');
                            id = "";
                        });
                    } else if (result.status === 'more') {
                        swal({
                            text: result.info,
                            icon: 'warning',
                            timer: 1200,
                            buttons: false,
                        });
                    } else {
                        swal("alert", "Data Not Save", "error");
                    }
                },
                error: function(xhr, status, error) {
                    // Handle the error response here
                    console.error(xhr, status, error);
                    swal("alert", "An error occurred while saving the data.", "error");
                },
                complete: function(data) {
                    // Enable buttons and hide loading spinner
                    $("#batal").prop("disabled", false);
                    $("#simpan").prop("disabled", false);
                    $('#simpan').html('Simpan');
                }
            });
        }

        $(document).on("click", "#button_edit_galeri", function() {
            id = $(this).data('id');
            var name = $(this).data('name');
            $("#name").val(name);
        });

        $(document).on("click", "#button_delete_galeri", function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            $("#delete_id").val(id);
            $("#delete_name").text(name);
        });

        $(document).on("click", "#delete", function() {
            var id = $('#delete_id').val();
            if (id == '') {
                swal({
                        text: 'Can\'t Delete This Item..',
                        timer: 800,
                        buttons: false,
                    })
                    .then(() => {
                        $('#modal_delete_galeri').modal('hide');
                    })
            } else {
                // processing ajax request
                $.ajax({
                    url: "{{ url('admin/delete_galeri') }}",
                    type: 'DELETE',
                    dataType: "json",
                    data: {
                        id: id
                    },
                    beforeSend: function() {
                        /* Show image container */
                        $("#delete").prop("disabled", true);
                        $("#close").prop("disabled", true);
                        $('#delete').html(
                            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
                        );
                    },
                    success: function(result) {
                        // console.log(result);
                        if (result.status == true) {
                            $('#modal_delete_galeri').modal('hide');
                            swal({
                                    text: result.info,
                                    icon: 'success',
                                    timer: 800,
                                    buttons: false,
                                })
                                .then(() => {
                                    table.ajax.reload();
                                })
                        } else {
                            swal({
                                    text: 'Error.. Can\'t Delete',
                                    timer: 800,
                                    buttons: false,
                                })
                                .then(() => {
                                    $('#modal_delete_galeri').modal('hide');
                                })
                        }
                    },
                    complete: function(data) {
                        // Hide image container
                        $("#close").prop("disabled", false);
                        $("#delete").prop("disabled", false);
                        $('#delete').html('Delete');
                    }
                });
            }

        });
    </script>
@endpush
