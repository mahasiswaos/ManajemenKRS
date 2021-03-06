@extends('layout.bootstrapadmin.index')

@section('content')
<br/>
<h2>Form Ambil Matakuliah</h2>
<hr/>
<a href="<?php echo URL::to('/AmbilMatkul/add'); ?>" class="btn btn-primary">
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
                <th>Nilai</th>
                <th>Semester</th>
                <th>Tahun_ajar</th>
                <th>Nama Mahasiswa</th>
                <th>Nama Matakuliah</th>
                <th>Action</th>
            </tr>
            <?php foreach ($isi as $value) { ?>
                <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['nilai']; ?></td>
                    <td><?php echo $value['semester']; ?></td>
                    <td><?php echo $value['tahun_ajar']; ?></td>
                    <td><?php echo $value['mahasiswa']['nama_mahasiswa']; ?></td>
                    <td><?php echo $value['matkul']['nama_matkul']; ?></td>
                    <td>
                        <div class="btn btn-group">
                            <a class="btn btn-small btn-danger" title="Delete" href="{{ URL::to('/AmbilMatkul/delete/' . $value->id) }}"><span class="glyphicon glyphicon-trash"></span> </a>
                            <a class="btn btn-small btn-primary" title="Update" href="{{ URL::to('/AmbilMatkul/edit/' . $value->id) }}"><span class=" glyphicon glyphicon-edit"></span> </a>
                        </div>

                    </td>
                </tr>
                <?php } ?>
        </table>
    <div class="panel-footer"></div>
</div>
@stop