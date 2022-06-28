@include ('admin.sidebar')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Kantin Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/tabel">Beranda</a></li>
              <li class="breadcrumb-item active">Ubah Kantin Information</li>
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
                <h3 class="card-title">Edit Kantin Information</h3>
              </div>
              <div>

<form role="form" action="{{route('tabel.update',$update->id)}}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="form-group">
    <label for="Judul">Judul:</label>
    <input type="Judul" name="Judul" class="form-control" id="Judul" value="{{$update->Judul}}">
  </div>
  <div class="form-group">
    <label for="pwd">Deskripsi:</label>
    <input type="Deskripsi" name="Deskripsi" class="form-control" id="Deskripsi"  value="{{$update->Deskripsi}}">
  </div>
  <div class="form-group">
    <label for="pwd">tanggal:</label>
    <input type="date" name="Tanggal" class="form-control" id="Tanggal"  value="{{$update->Tanggal}}">
  </div>
  <div class="form-group">
    <label for="Gambar">Gambar:</label>
    <input class="form-control" id="formFileMultiple"  name="Gambar" type="file" id="formFileMultiple"  value="{{$update->Gambar}}">
  </div>


  
  <button type="submit"  class="btn btn-primary">Ubah</button>
  <a href="{{url('tabel ')}}" class="btn btn-primary">Kembali</a>
</form>
</div>


