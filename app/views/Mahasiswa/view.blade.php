@extends('layout.bootstrapadmin.index')

@section('content')
<br/>
<h2>Form Mahasiswa</h2>
<h2>Nama Kelompok</h2>
<h3>1. ROZIKIN</h3>
<h3>2. AHMAD ZAENI</h3>
<h3>3. DONY OKTAVIANSYAH</h3>
<hr/>
<a href="<?php echo URL::to('/Mahasiswa/add'); ?>" class="btn btn-primary">
    <i class="glyphicon glyphicon-plus"></i>
    Tambah
</a>
<br/>
<br/>
<div class="panel panel-info">
    <!-- Default panel contents -->
    <div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i> Tabel Keterangan</div>

    <!-- Table -->
        <table class="table table-bordered">
            <tr class="panel-default">
                <th>Id</th>
                <th>Nim</th>
                <th>Nama Mahasiswa</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
            <?php foreach ($isi as $value) { ?>
                <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['nim']; ?></td>
                    <td><?php echo $value['nama_mahasiswa']; ?></td>
                    <td><?php echo $value['alamat']; ?></td>
                    <td>
                        <div class="btn btn-group">
                            <a class="btn btn-danger" title="Delete" href="{{ URL::to('/Mahasiswa/delete/' . $value->id) }}"><span class="glyphicon glyphicon-trash"></span> </a>
                            <a class="btn btn-primary" title="Update" href="{{ URL::to('/Mahasiswa/edit/' . $value->id) }}"><span class=" glyphicon glyphicon-edit"></span> </a>
                        </div>

                    </td>
                </tr>
                <?php } ?>
        </table>
    <div class="panel-footer"></div>
</div>
<br/>
@stop