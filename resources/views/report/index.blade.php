@extends('layouts.main_admin')
@section('title',' | Report')
<link rel="stylesheet" href="{{asset('assets/plugins/html5-editor/bootstrap-wysihtml5.css')}}" />
@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Report</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="card">
        <div class="card-body">
     
  
            <h3 class="card-title">Daftar </h3>

            <div class="table-responsive m-t-10">
                <table id="myTable2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Stp Nomor</th>
                            <th>Nama</th>
                            <th>Stp Tugas</th>
                            <th>Tanggal</th>
                            <th>Tempat</th>
                            <th>Jenis</th>
                            <th>Status Lap</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
  
                    <tbody>
                        
                          <?php $no = 1;?>
                          @foreach($surtug_pegawai as $surtug)
                          <tr>
                              <td>{{$no++}}</td>
                              <td>{{$surtug->stp_nomor}}</td>
                              <td>{{$surtug->st_nama}}</td>
                              <td>{{$surtug->stp_tgs_sbg}}</td>
                              <td>{{$surtug->st_tglmulai}} s.d {{$surtug->st_tglselesai}}</td>
                              <td>{{$surtug->st_tempat}}</td>
                              <td>{{$surtug->st_jenis}}</td>
                              <td>{{$surtug->status_laporan}}</td>
                              <td> 
                                  {{ Form::open(['method'=>'DELETE'])}}
                                <a href="{{route ('report.create')}}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="Detail"><i class="fa fa-file-text-o"></i></a>
                                <a href="" class="btn btn-warning btn-sm" data-toggle="modal"
                                  
                                  data-target="#edit" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                  
                                  <button onclick="return confirm('Anda Yakin Ingin Menghapus Kegiatan?')" type ="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Hapus"><i class="fa fa-trash"></i></button>
                                  {{ Form::close()}}
                    
                              </td>
                        </tr>
                        @endforeach
                   
                    </tbody>


                </table>
            </div>
        </div>
    </div>


                
@endsection

@section('writen_scripts')
    <script src="{{asset('js/custom.min.js')}}"></script>
    <script src="{{asset('assets/plugins/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('assets/plugins/wizard/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets/plugins/wizard/jquery.validate.min.js')}}"></script>
    <!-- Sweet-Alert  -->
    <script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/plugins/wizard/steps.js')}}"></script>
    <script src="{{asset('assets/plugins/tinymce/tinymce.min.js')}}"></script>
    <!-- This is data table -->
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/2.5.0/jszip.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
    <!-- end - This is for export functionality only -->

<script type="text/javascript">

  $(document).ready(function() {
        $('#myTable2').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });



    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

</script>
@endsection
