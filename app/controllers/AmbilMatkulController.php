<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AmbilMatkulController
 *
 * @author OZI
 */

namespace App\Controllers;

use App\Controllers\BaseController;
use Input;
use View;
use App\Models\Ambil_Matkul;
use App\Models\Matkul;
use App\Models\Mahasiswa;
use Redirect;

class AmbilMatkulController extends BaseController {

    /**
     * 
     * @return View
     */
    public function View() {
        $input = Ambil_Matkul::all();
        $data = [
            'isi' => $input,
        ];
        return View::make('AmbilMatkul.view', $data);
    }

    /**
     * 
     * @return View
     */
    public function Add() {
        $matkul = Matkul::all();
        $data1 = [
            'matkul' => $matkul,
        ];
        $mhs = Mahasiswa::all();
        $data2 = [
            'mahasiswa' => $mhs,
        ];
        return View::make('AmbilMatkul.add', $data1, $data2);
    }

    /**
     * 
     * @return Redirect
     */
    public function prosesAdd() {
        $in = Input::all();
        $ket = new Ambil_Matkul;
        $ket->nilai = $in['nilai'];
        $ket->semester = $in['semester'];
        $ket->tahun_ajar = $in['tahun_ajar'];
        $ket->mahasiswa_id = $in['mahasiswa'];
        $ket->matkul_id = $in['matkul'];
        $ket->save();
        /*
         * redirect ke index bands
         */
        return Redirect::to('AmbilMatkul/view');
    }

    /**
     * 
     * @param type $id
     * @return View And Redirect
     */
    public function AmbilMatkulEdit($id) {
        $ket = AmbilMatkul::find($id);
        $data = [
            'isi' => $ket,
        ];
        return View::make('AmbilMatkul.edit', $data);
    }

    /**
     * 
     * @param type $id
     * @return Redirect
     */
    public function prosesUpdate($id) {
        // validation
        $rules = [
            'id' => 'required',
            'nilai' => 'required',
            'semester' => 'required',
            'tahun_ajar' => 'required',
            'mahasiswa_id' => 'required',
            'matkul_id' => 'required',
        ];

        $validator = Validator::make(Input::all(), $rules);
        // jika tidak valid redirect ke halaman edit
        if ($validator->fails()) {
            return Redirect::to("/AmbilMatkul/edit/" . $id)
                            ->withErrors($validator);
        } else {
            // jika valid disimpan
            $in = Input::all();
            $ket = AmbilMatkul::find($id);
            $ket->id = $in['id'];
            $ket->nilai = $in['nilai'];
            $ket->semester = $in['semester'];
            $ket->tahun_ajar = $in['tahun_ajar'];
            $ket->mahasiswa_id = $in['mahasiswa_id'];
            $ket->matkul_id = $in['matkul_id'];
            $ket->save();
            // redirect ke halaman band index
            Session::flash('message', 'Successfully updated Users!');
            return Redirect::to('AmbilMatkul/view');
        }
    }

    /**
     * 
     * @param type $id
     * @return Redirect
     */
    public function AmbilMatkulDelete($id) {
        $user = AmbilMatkul::find($id);
        $user->delete();
        Session::flash('message', 'Successfully deleted the activity!');
        return Redirect::to('AmbilMatkul/view');
    }

}
