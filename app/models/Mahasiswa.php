<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mahasiswa
 *
 * @author OZI
 */
class Mahasiswa extends Eloquent {

    protected $table = 'mahasiswa';
    public $timestamps = false;

    public function ambil_matkul() {
        return $this->hasMany("App\\Models\\Ambil_Matkul");
    }

}
