@extends('layouts.master')

@section('content')
    <div class="form-inline">
        <input type="hidden" id="dd1search" value="0">
        <label for="txtSearch">Pesquisar por Usuario</label>
        <input type="text" class="form-control" id="txtSearch">

    </div>
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>User Name</th>
            <th>Product Name</th>
        </tr>
        </thead>
    </table>

    <a class="btn btn-dark" href="/">Pagina inicial</a>

@stop

@push('scripts')
    <script>
        $(function() {

            var table = $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                pageLength: 100,
                dom: 'lrtip',
                ajax: '{!! route('datatables.data') !!}',
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'nome_product', name: 'nome_product' }
                ],

            });


            $(document).ready(function() {

                var column_no = 0;
                $('#ddlSearch').on('change',function(){
                    column_no = Number($(this).val());
                });

                $( '#txtSearch' ).on( 'input', function () {
                    if ( table.columns([column_no]).search() !== $( '#txtSearch' ).val() ) {
                        table.columns([column_no]).search( $( '#txtSearch' ).val() ).draw();
                    }
                } );


            });
        });
    </script>
@endpush
