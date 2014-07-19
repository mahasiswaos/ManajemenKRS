<?php

/**
 * Description of MahasiswaController
 *
 * @author OZI
 */

namespace App\Controllers;

use App\Controllers\BaseController;
use Input;
use View;
use App\Models\Matkul;
use Redirect;

class MatkulController extends BaseController {

    //put your code here
    /**
     * 
     * @return View
     */
    public function View() {
        $input = Matkul::all();
        $data = [
            'isi' => $input,
        ];
        return View::make('Matkul.view', $data);
    }

    public function Add() {
        return View::make('Matkul.add');
    }

    /**
     * 
     * @return Redirect
     */
    public function prosesAdd() {
        $in = Input::all();
        $ket = new Matkul;
        $ket->kode_matkul = $in['kode'];
        $ket->nama_matkul = $in['nama'];
        $ket->sks = $in['sks'];
        $ket->semester = $in['semester'];
        $ket->save();

        return Redirect::to('Matkul/view');
    }

    /**
     * 
     * @param type $id
     * @return View And Redirect
     */
    public function Edit($id) {
        $ket = Matkul::find($id);
        $data = [
            'isi' => $ket,
        ];
        return View::make('Matkul.edit', $data);
    }

    /**
     * 
     * @param type $id
     * @return Redirect
     */
    public function Update($id) {
        $in = Input::all();
        $ket = Matkul::find($id);
        $ket->id = $in['id'];
        $ket->kode_matkul = $in['kode'];
        $ket->nama_matkul = $in['nama'];
        $ket->sks = $in['sks'];
        $ket->semester = $in['semester'];
        $ket->save();

        return Redirect::to('Matkul/view');
    }

    /**
     * 
     * @param type $id
     * @return Redirect
     */
    public function Delete($id) {
        $del = Matkul::find($id);
        $del->delete();

        return Redirect::to('Matkul/view');
    }

}
