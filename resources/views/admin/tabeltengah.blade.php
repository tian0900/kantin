@include ('admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Denah Kantin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/tabel">Beranda</a></li>
              <li class="breadcrumb-item active">Denah Kantin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Denah Kantin Tengah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="{{asset('template')}}/denah.xlsx" class="btn btn-primary mb-5" download>Unduh Template</a>
              <div style="margin-top: 15px;">
            <form role="form" method="post" action="{{ url('siswa/tengah') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Masukkan file</label>
                        <input type="file" name="file" id="exampleInputFile">
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-success btn-md">Import</button>
                </div>
            </form><br>
                <a href="{{url('createkantintengah')}}" class="btn btn-primary mb-5">+Tambah Mahasiswa</a>
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama-1</th>
                    <th>Nama-2</th>
                    <th>Program Studi-1</th>
                    <th>Program Studi-2</th>
                    <th>Meja</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <?php $number=1;?>
                  <tbody>
                    @foreach  ($datatengah as $datatengah )
                  <tr>
                    <td><?php echo $number++; ?></td>
                    <td>{{$datatengah -> nama}}</td>
                    <td>{{$datatengah -> namadua}}</td>
                    <td>{{$datatengah -> prodi}}</td>
                    <td>{{$datatengah -> prodidua}}</td>
                    <td>{{$datatengah -> meja}}</td>
                    <td>
                    <a href="/editkantintengah/edit/{{$datatengah->id}}" class="btn btn-warning"><i class="fas fa-edit"></i>Ubah</a>
                    <a href="tabeltengah/delete/{{$datatengah->id}}" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                  </tr>@endforeach
                                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
       
    </div>
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
