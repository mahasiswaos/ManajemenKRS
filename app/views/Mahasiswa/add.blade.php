@extends('layout.bootstrapadmin.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-info">
        <div class="panel-heading">
            Form Tambah Mahasiswa
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="{{ URL::to('/Mahasiswa/add/proses') }}" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-3">N I M</label>
                    <div class="col-sm-5">
                        <input type="text" name="nim" class="form-control" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Nama Mahasiswa</label>
                    <div class="col-sm-5">
                        <input type="text" name="nama" class="form-control" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Alamat</label>
                    <div class="col-sm-5">
                        <textarea class="form-control" name="alamat"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Tanggal lahir</label>
                    <div class="col-sm-5">
                        <input type="date" name="tgl_lhr" class="form-control" required=""/>
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