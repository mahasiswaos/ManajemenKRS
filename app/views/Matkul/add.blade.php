@extends('layout.bootstrapadmin.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-info">
        <div class="panel-heading">
            Form Tambah Matakuliah
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="{{ URL::to('/Matkul/add/proses') }}" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-3">Kode Matakuliah</label>
                    <div class="col-sm-5">
                        <input type="text" name="kode" class="form-control" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Nama Matakuliah</label>
                    <div class="col-sm-5">
                        <input type="text" name="nama" class="form-control" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">SKS</label>
                    <div class="col-sm-5">
                        <input type="text" name="sks" class="form-control" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Semester</label>
                    <div class="col-sm-5">
                        <input type="text" name="semester" class="form-control" required=""/>
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