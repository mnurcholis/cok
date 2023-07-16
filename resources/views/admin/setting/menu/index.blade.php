@extends('layout.master')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-grid gap-2">

                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pengaturan Menu</h5>
                        <button class="btn btn-primary mb-3 btn-sm" type="button" id="add-menu" data-bs-toggle="modal"
                            data-bs-target="#add_menu_new">Tambah Menu</button>
                        <table class="table table-hover table-bordered" id="table_menu">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 30%">Title</th>
                                    <th scope="col" style="width: 30%">Slug</th>
                                    <th scope="col" style="width: 30%">Parent Id</th>
                                    <th scope="col" style="width: 10%">Action</th>
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


    <div class="modal fade" id="add_menu_new" tabindex="-1" data-bs-backdrop="static" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-3">
                            <label for="title" class="col-sm-4 col-form-label">Title</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="title" id="title">
                                <small id="title_help" class="form-text"></small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="slug" class="col-sm-4 col-form-label">Slug</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="slug" id="slug">
                                <small id="slug_help" class="form-text"></small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="parent_id" class="col-sm-4 col-form-label">Parent ID</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="parent_id" name="parent_id">
                                    <option value="">Silahkan Pilih</option>
                                </select>
                                <small id="parent_id_help" class="form-text"></small>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="tutup">Close</button>
                    <button type="button" class="btn btn-primary" id="save" name="save">Save</button>
                </div>
            </div>
        </div>
    </div><!-- End Add Links Name Modal-->

    <div class="modal fade" id="modal_edit_menu" tabindex="-1" data-bs-backdrop="static" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-4 col-form-label">Title</label>
                            <div class="col-sm-8">
                                <input type="hidden" class="form-control" name="edit_id" id="edit_id">
                                <input type="text" class="form-control" name="edit_title" id="edit_title">
                                <small id="edit_title_help" class="form-text"></small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="slug" class="col-sm-4 col-form-label">Slug</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="edit_slug" id="edit_slug">
                                <small id="edit_slug_help" class="form-text"></small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="parent_id" class="col-sm-4 col-form-label">Parent ID</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="edit_parent_id" name="edit_parent_id">
                                    <option value="">Silahkan Pilih</option>
                                </select>
                                <small id="edit_parent_id_help" class="form-text"></small>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        id="edit_tutup">Close</button>
                    <button type="button" class="btn btn-primary" id="edit_save" name="edit_save">Save</button>
                </div>
            </div>
        </div>
    </div><!-- End Add Links Name Modal-->

    <div class="modal fade" id="modal_delete_menu" tabindex="-1" data-bs-backdrop="static" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Menu ?? <b id="delete_title"></b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <input type="hidden" class="form-control" name="delete_id" id="delete_id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        id="close">Close</button>
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

        function daftar_menu() {
            var select1 = $('#parent_id');
            var select2 = $('#edit_parent_id');
            select1.empty();
            select2.empty();
            select1.append('<option value="0" selected>Silahkan pilih ?</option>');
            select2.append('<option value="0">Silahkan pilih ?</option>');
            $.ajax({
                url: "{{ route('menu.daftar') }}",
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(key, value) {
                        select1.append('<option value="' + value.id + '">' + value.title + '</option>');
                        select2.append('<option value="' + value.id + '">' + value.title + '</option>');
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Error: ' + textStatus + ' - ' + errorThrown);
                }
            });
        }

        $(document).ready(function() {
            daftar_menu();
        });

        var table;
        $(document).ready(function() {
            table = $('#table_menu').DataTable({
                processing: true,
                serverSide: true,
                lengthChange: false,
                paging: false,
                info: false,
                iDisplayLength: 5,
                order: [],
                ajax: "{{ route('menu.list') }}",
                columns: [{
                        data: 'title',
                        name: 'title',
                        orderable: false,
                    }, {
                        data: 'slug',
                        name: 'slug',
                        orderable: false,
                    }, {
                        data: 'parent_id',
                        name: 'parent_id',
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

        $('#add_menu_new').on('shown.bs.modal', function() {
            $('#title').val('');
            $('#title_help').text('');
            $('#slug').val('');
            $('#slug_help').text('');
            $('#parent_id').val('0');
            $('#parent_id_help').text('');
            $('#title').trigger('focus');
        })

        $(document).on("blur", "#title", function() {
            $('#title_help').text('');
        });

        $(document).on("click", "#save", function() {
            var title = $('#title').val();
            var slug = $('#slug').val();
            var parent_id = $('#parent_id').val();
            console.log(slug);
            if (title == '') {
                $('#title').trigger('focus')
                $('#title_help').text('Title Menu is Empty!');
            } else {
                // processing ajax request
                $.ajax({
                    url: "{{ route('save.menu') }}",
                    type: 'POST',
                    dataType: "json",
                    data: {
                        title: title,
                        slug: slug,
                        parent_id: parent_id,
                    },
                    beforeSend: function() {
                        /* Show image container */
                        $("#tutup").prop("disabled", true);
                        $("#save").prop("disabled", true);
                        $('#save').html(
                            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
                        );
                    },
                    success: function(result) {
                        // console.log(result);
                        if (result.status == true) {
                            $('#add_menu_new').modal('hide');
                            swal({
                                    text: result.info,
                                    icon: 'success',
                                    timer: 800,
                                    buttons: false,
                                })
                                .then(() => {
                                    daftar_menu();
                                    table.ajax.reload();
                                })
                        } else if (result.status == false) {
                            $('#links_name_help').text(result.info);
                        } else if (result.status === 'more') {
                            swal({
                                text: result.info,
                                icon: 'warning',
                                timer: 1200,
                                buttons: false,
                            })
                        } else {
                            swal("alert", "Data Not Save", "error");
                            $('#add_menu_new').modal('hide');
                        }
                    },
                    complete: function(data) {
                        // Hide image container
                        $("#tutup").prop("disabled", false);
                        $("#save").prop("disabled", false);
                        $('#save').html('Save');
                    }
                });
            }

        });

        $(document).on("click", "#button_edit_menu", function() {
            var id = $(this).data('id');
            var title = $(this).data('title');
            var slug = $(this).data('slug');
            var parent_id = $(this).data('parent_id');
            console.log(id + title + slug + parent_id);
            $("#edit_id").val(id);
            $("#edit_title").val(title);
            $("#edit_slug").val(slug);
            $("#edit_parent_id").val(parent_id);
        });

        $(document).on("click", "#edit_save", function() {
            var id = $('#edit_id').val();
            var title = $('#edit_title').val();
            var slug = $('#edit_slug').val();
            var parent_id = $('#edit_parent_id').val();
            if (title == '') {
                $('#edit_title').trigger('focus')
                $('#edit_title_help').text('Title Menu is Empty!');
            } else {
                // processing ajax request
                $.ajax({
                    url: "{{ route('update.menu') }}",
                    type: 'POST',
                    dataType: "json",
                    data: {
                        id: id,
                        title: title,
                        slug: slug,
                        parent_id: parent_id,
                    },
                    beforeSend: function() {
                        /* Show image container */
                        $("#edit_tutup").prop("disabled", true);
                        $("#edit_save").prop("disabled", true);
                        $('#edit_save').html(
                            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
                        );
                    },
                    success: function(result) {
                        // console.log(result);
                        if (result.status == true) {
                            $('#modal_edit_menu').modal('hide');
                            swal({
                                    text: result.info,
                                    icon: 'success',
                                    timer: 800,
                                    buttons: false,
                                })
                                .then(() => {
                                    daftar_menu();
                                    table.ajax.reload();
                                })
                        } else if (result.status == false) {
                            $('#edit_name_help').text(result.info);
                        } else if (result.status === 'more') {
                            swal({
                                text: result.info,
                                icon: 'warning',
                                timer: 1200,
                                buttons: false,
                            })
                        } else {
                            swal("alert", "Data Not Save", "error");
                            $('#modal_edit_menu').modal('hide');
                        }
                    },
                    complete: function(data) {
                        // Hide image container
                        $("#edit_tutup").prop("disabled", false);
                        $("#edit_save").prop("disabled", false);
                        $('#edit_save').html('Save');
                    }
                });
            }

        });


        $(document).on("click", "#button_delete_menu", function() {
            var id = $(this).data('id');
            var title = $(this).data('title');
            $("#delete_id").val(id);
            $("#delete_title").text(title);
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
                        $('#modal_delete_menu').modal('hide');
                    })
            } else {
                // processing ajax request
                $.ajax({
                    url: "{{ url('admin/delete_menu') }}",
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
                            $('#modal_delete_menu').modal('hide');
                            swal({
                                    text: result.info,
                                    icon: 'success',
                                    timer: 800,
                                    buttons: false,
                                })
                                .then(() => {
                                    daftar_menu();
                                    table.ajax.reload();
                                })
                        } else {
                            swal({
                                    text: 'Error.. Can\'t Delete',
                                    timer: 800,
                                    buttons: false,
                                })
                                .then(() => {
                                    $('#modal_delete_menu').modal('hide');
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
