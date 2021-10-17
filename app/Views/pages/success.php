<?= $this->extend('layout/template');?>
<?= $this->section('content');?>

<div class="container mt-4">
    <div class="row">
        <?php 
        $nama = $_POST['username'];
        $code = $_POST['password'];
        $message = $_POST['message'];
        $jurusan = $_POST['jurusan'];
        $gender = $_POST['gender'];
        $checkbox = $_POST['kejujuran'];
        $status = $_POST['status'];
        ?>
        <div class="col-success">
        <h3>Your form was successfully submitted!</h3>
        <h3>Here's the result</h3>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Status</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Gender</th>
      <th scope="col">Harapan</th>
      <th scope="col">Kode</th>
      <th scope="col">Kejujuran</th>
    </tr>
  </thead>
  <tbody>
  <?php $no=1; foreach ($form as $f):?>
    <tr>
      <td><?=$no++?></td>
      <td><?=$f['nama'];?></td>
      <td><?=$f['status'];?></td>
      <td><?=$jurusan;?></td>
      <td><?=$gender;?></td>
      <td><?=$message;?></td>
      <td><?=$code;?></td>
      <td><?=$checkbox;?></td>
    </tr>
  <?php endforeach;?>
  </tbody>
</table>

        <p><?= anchor('form', 'Try it again!') ?></p>
        </div>
    </div>
</div>


<?= $this->endSection();?>
