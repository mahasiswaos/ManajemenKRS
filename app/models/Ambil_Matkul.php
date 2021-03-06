<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ambil_Matkul
 *
 * @author OZI
 */
class Ambil_Matkul extends Eloquent {
    protected $table = 'ambil_matkul';
    public $timestamps = false;

    public function mahasiswa() {
        return $this->belongsTo("App\\Models\\Mahasiswa");
    }
    public function matkul() {
        return $this->belongsTo("App\\Models\\Matkul");
    }
}
