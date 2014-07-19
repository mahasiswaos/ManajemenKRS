@extends('layout.bootstrapadmin.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-info">
        <div class="panel-heading">
            Form Tambah Ambil Mata Kulyah
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="{{ URL::to('/AmbilMatkul/add/proses') }}" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-3">Nilai</label>
                    <div class="col-sm-5">
                        <input type="text" name="nilai" class="form-control" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Semester</label>
                    <div class="col-sm-5">
                        <input type="text" name="semester" class="form-control" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Tahun Ajar</label>
                    <div class="col-sm-5">
                        <input type="text" name="tahun_ajar" class="form-control" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Nama Mahasiswa</label>
                    <div class="col-sm-5">
                        <select name="mahasiswa" class="form-control">
                            <?php foreach ($mahasiswa as $data) { ?>
                            <option value="{{ $data['id'] }}"><?php echo $data['nama_mahasiswa']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Nama Matakuliah</label>
                    <div class="col-sm-5">
                        <select name="matkul" class="form-control">
                            <?php foreach ($matkul as $val) { ?>
                            <option value="{{ $val['id'] }}"><?php echo $val['nama_matkul']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5 col-sm-offset-3">
                        <button type="submit" name="submit" class="btn btn-default">
                            <i class="glyphicon glyphicon-floppy-save"></i>
                            Simpan
                        </button>
                        <button type="reset" name="reset" class="btn btn-info">
                            <i class="glyphicon glyphicon-minus-sign"></i>
                            Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop