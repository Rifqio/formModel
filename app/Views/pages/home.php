<?= $this->extend('layout/template');?>
<?= $this->section('content');?>

<div class="container mt-4">
    <div class="row">
        <div class="col-success">
        <h3 class="mb-4">Rekap Data Mahasiswa</h3>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Status</th>
      <th scope="col">Domisili</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Gender</th>

    </tr>
  </thead>
  <tbody>
  <?php $no=1; foreach ($form as $f):?>
    <tr>
      <td><?=$no++?></td>
      <td><?=$f['nama'];?></td>
      <td><?=$f['status'];?></td>
      <td><?=$f['kota'];?></td>
      <td><?=$f['jurusan'];?></td>
      <td><?=$f['gender'];?></td>

    </tr>
  <?php endforeach;?>
  </tbody>
</table>
<a href="/form/create" class="btn btn-success">Tambah Data</a>
        </div>
    </div>
</div>


<?= $this->endSection();?>
