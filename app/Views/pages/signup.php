<?= $this->extend('layout/template');?>
<?= $this->section('content');?>

<div class="container">
    <div class="col">
    
        <h2 class="title mt-4">Form Biodata <i class="fas fa-address-card"></i></h2> 
        <div class="row">

        <?= $validation->listErrors() ?>
        <form action="/form/save" method="POST">
        <?= csrf_field(); ?>
        <div class="nama">
        <label class="form-label">Nama Lengkap</label>
        <?php 
        $data = [
            'name'  => 'username',
            'class' =>'form-control'];
        echo form_input($data);
        ?>
        </div>
        
        <div class="status">
        <label class="form-label">Status Bekerja</label>
        <?php 
        $data = [
            'name'  => 'status',
            'class' =>'form-control',
            'rows' => '1'];
            echo form_input($data);
        ?>
        </div>

        <div class="kota">
        <label class="form-label">Domisili</label>
        <?php 
        $data = [
            'name'  => 'kota',
            'class' =>'form-control',
            'rows' => '1'];
            echo form_input($data);
        ?>
        </div>

        <div class="jurusan">
        <label class="form-label">Jurusan</label>
        <?php 
        $options = [
            '-'=>'',
            'Teknik Informatika' => 'Teknik Informatika',
            'Fisika' => 'Fisika',
            'Farmasi' => 'Farmasi',
            'Kimia' => 'Kimia',
            'Ilmu Lingkungan' => 'Ilmu Lingkungan',
            'Agroteknologi' => 'Agroteknologi',
            'Pertanian' =>'Pertanian'
        ];
        $class = ['class'=> 'form-select form-select-lg mb-3'];
        echo form_dropdown('jurusan',$options,'',$class);
        ?>
        </div>
        <div class="gender">
        <label class="form-label">Jenis Kelamin</label>
        <?php
        $data = [
            'name' => 'gender',
            'class'=> 'form-check-input',
            'id' => 'gender',
            'value' => 'Pria'
        ];
        echo form_radio($data);       
        ?>
        <label class="form-check-label" id="pria" for="gender">Pria</label>
        <?php
        $data = [
            'name' => 'gender',
            'class'=> 'form-check-input',
            'id' => 'gender',
            'value' => 'Wanita'
        ];
        echo form_radio($data);       
        ?>
        <label class="form-check-label" for="gender">Wanita</label>
        </div>
        <div class="form-check">
        <?php
        $data = [
            'name' => 'kejujuran',
            'class'=> 'form-check-input',
            'value'=> 'checked',
            'id' => 'checkbox'
        ];
        echo form_checkbox($data);       
        ?>
        <?= form_hidden('status','Mahasiswa'); ?>
        <label class="form-check-label" for="checkbox">Saya mengisikan data dengan sejujurnya</label>
        </div>
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
        <p class="copyright mt-3">This page was designed by Rifqi Oktario to fulfill the backend task</p>
        </div>
    </div>
</div>

<?= $this->endSection();?>
    