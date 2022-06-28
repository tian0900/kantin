@include ('admin.sidebar')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Jadwal Piket</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/tabel">Beranda</a></li>
              <li class="breadcrumb-item active">>Edit Jadwal Piket</li>
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
                <h3 class="card-title">Edit Jadwal Piket</h3>
              </div>
              <div>

<form role="form" action="{{route('jadwaltengah.update',$update->id)}}" method="POST" >
{{ csrf_field() }}
<div class="form-group">
    <label for="hari">Hari:</label>
    <input type="hari" name="hari" class="form-control" id="hari" value="{{$update->hari}}" readonly>
  </div>
  <div class="form-group">
    <label for="pikettengah">Piket:</label>
    <textarea type="pikettengah" name="pikettengah" class="form-control" id="pikettengah" height="400px" rows="7" >{{$update->pikettengah}}</textarea>
  </div>
  <button type="submit"  class="btn btn-primary">Ubah</button>
  <a href="{{url('tabeljadwalkantinsatudua ')}}" class="btn btn-primary">Kembali</a>
  </div>
</form>



