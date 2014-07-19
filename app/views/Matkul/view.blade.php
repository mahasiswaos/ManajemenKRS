@extends('layout.bootstrapadmin.index')

@section('content')
<br/>
<h2>Form Matakuliah</h2>
<hr/>
<a href="<?php echo URL::to('/Matkul/add'); ?>" class="btn btn-primary">
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
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Action</th>
        </tr>
        <?php foreach ($isi as $value) { ?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['kode_matkul']; ?></td>
                <td><?php echo $value['nama_matkul']; ?></td>
                <td><?php echo $value['sks']; ?></td>
                <td><?php echo $value['semester']; ?></td>
                <td>
                    <div class="btn btn-group">
                        <a class="btn btn-danger" title="Delete" href="{{ URL::to('/Matkul/delete/' . $value->id) }}"><span class="glyphicon glyphicon-trash"></span> </a>
                        <a class="btn btn-primary" title="Update" href="{{ URL::to('/Matkul/edit/' . $value->id) }}"><span class=" glyphicon glyphicon-edit"></span> </a>
                    </div>

                </td>
            </tr>
        <?php } ?>
    </table>
    <div class="panel-footer"></div>
</div>
@stop