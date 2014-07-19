<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MahasiswaController
 *
 * @author OZI
 */

namespace App\Controllers;

use App\Controllers\BaseController;
use Input;
use View;
use App\Models\Mahasiswa;
use Redirect;

class MahasiswaController extends BaseController {

    //put your code here
    /**
     * 
     * @return View
     */
    public function View() {
        $input = Mahasiswa::all();
        $data = [
            'isi' => $input,
        ];
        return View::make('Mahasiswa.view', $data);
    }

    /**
     * 
     * @return View
     */
    public function Add() {
        return View::make('Mahasiswa.add');
    }

    /**
     * 
     * @return Redirect
     */
    public function prosesAdd() {
        $in = Input::all();
        $ket = new Mahasiswa;
        $ket->nim = $in['nim'];
        $ket->nama_mahasiswa = $in['nama'];
        $ket->alamat = $in['alamat'];
        $ket->tanggal_lahir = $in['tgl_lhr'];
        $ket->save();

        return Redirect::to('Mahasiswa/view');
    }

    /**
     * 
     * @param type $id
     * @return View And Redirect
     */
    public function Edit($id) {
        $ket = Mahasiswa::find($id);
        $data = [
            'isi' => $ket,
        ];
        return View::make('Mahasiswa.edit', $data);
    }

    /**
     * 
     * @param type $id
     * @return Redirect
     */
    public function Update($id) {
            $in = Input::all();
            $ket = Mahasiswa::find($id);
            $ket->id = $in['id'];
            $ket->nim = $in['nim'];
            $ket->nama_mahasiswa = $in['nama'];
            $ket->alamat = $in['alamat'];
            $ket->tanggal_lahir = $in['tgl_lhr'];
            $ket->save();
           
            return Redirect::to('Mahasiswa/view');
    }

    /**
     * 
     * @param type $id
     * @return Redirect
     */
    public function Delete($id) {
        $del = Mahasiswa::find($id);
        $del->delete();
        
        return Redirect::to('Mahasiswa/view');
    }

}
