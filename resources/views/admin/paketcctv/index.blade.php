@extends('layout.master')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-grid gap-2">

                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Paket CCTV</h5>
                        <a href="{{ route('create.paketcctv') }}" class="btn btn-primary mb-3 btn-sm">Tambah Paket CCTV</a>
                        <table class="table table-hover table-bordered" id="table_paketcctv">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col" style="width: 60%">Nama</th>
                                    <th scope="col" style="width: 20%">Harga</th>
                                    <th scope="col" style="width: 20%">Action</th>
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

    <!-- Delete paketcctv Modal -->
    <div class="modal fade" id="modal_delete_paketcctv" tabindex="-1" data-bs-backdrop="static"
        aria-labelledby="modal_delete_paketcctvLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_delete_paketcctvLabel">Delete Paket CCTV</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this PAket CCTV?</p>
                    <input type="hidden" id="delete_paketcctv_id" value="">
                    <div id="delete_paketcctv_name"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete_paketcctv">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table;
        $(document).ready(function() {
            table = $('#table_paketcctv').DataTable({
                processing: true,
                serverSide: true,
                lengthChange: false,
                paging: true,
                info: false,
                iDisplayLength: 5,
                order: [],
                ajax: "{{ route('paketcctv.list') }}",
                columns: [{
                        data: 'id',
                        name: 'id',
                        orderable: false,
                    },
                    {
                        data: 'nama',
                        name: 'nama',
                        orderable: false,
                    },
                    {
                        data: 'harga',
                        name: 'harga',
                        orderable: false,
                        render: function(data) {
                            var rupiah = formatRupiah(data, 'Rp. ');
                            return rupiah;
                        }
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

        // Function to format the number to rupiah format
        function formatRupiah(angka, prefix) {
            var numberString = angka.toString().replace(/[^,\d]/g, ''),
                split = numberString.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix === undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

        // Delete Paket CCTV Confirmation
        $('#modal_delete_paketcctv').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var paketcctvId = button.data('id');
            var paketcctvName = button.data('name');
            var modal = $(this);
            modal.find('#delete_paketcctv_id').val(paketcctvId);
            modal.find('#delete_paketcctv_name').text('Paket CCTV Name: ' + paketcctvName);
        });

        $(document).on("click", "#confirm_delete_paketcctv", function() {
            var id = $('#delete_paketcctv_id').val();
            if (id == '') {
                swal({
                        text: 'Can\'t Delete This Item..',
                        timer: 800,
                        buttons: false,
                    })
                    .then(() => {
                        $('#modal_delete_paketcctv').modal('hide');
                    });
            } else {
                // processing ajax request
                $.ajax({
                    url: "{{ url('admin/paketcctv/delete') }}",
                    type: 'DELETE',
                    dataType: "json",
                    data: {
                        id: id
                    },
                    beforeSend: function() {
                        /* Show image container */
                        $("#confirm_delete_paketcctv").prop("disabled", true);
                        $("#close").prop("disabled", true);
                        $('#confirm_delete_paketcctv').html(
                            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
                            );
                    },
                    success: function(result) {
                        if (result.status == true) {
                            $('#modal_delete_paketcctv').modal('hide');
                            swal({
                                    text: result.info,
                                    icon: 'success',
                                    timer: 800,
                                    buttons: false,
                                })
                                .then(() => {
                                    table.ajax.reload();
                                });
                        } else {
                            swal({
                                    text: 'Error.. Can\'t Delete',
                                    timer: 800,
                                    buttons: false,
                                })
                                .then(() => {
                                    $('#modal_delete_paketcctv').modal('hide');
                                });
                        }
                    },
                    complete: function(data) {
                        // Hide image container
                        $("#close").prop("disabled", false);
                        $("#confirm_delete_paketcctv").prop("disabled", false);
                        $('#confirm_delete_paketcctv').html('Delete');
                    }
                });
            }
        });
    </script>
@endpush
