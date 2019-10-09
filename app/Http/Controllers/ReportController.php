<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surtugpegawai;
use DB;


class ReportController extends Controller
{
    public function index()
    {
    	$surtug_pegawai2 = \App\Surtugpegawai::all()->where("stp_nip","001600000000000000");
    	$surtug_pegawai = DB::table('surtug_pegawai')
    		->join('surat_tugas','surat_tugas.st_id','=','surtug_pegawai.stp_id')
    		->get()->where('stp_nip',"001600000000000000");
    		// $dok_laporan = \DB::table('dokumen_bapem_laporan')
      //               ->join('std_dokumen','std_dokumen.kode_dokumen','=','dokumen_bapem_laporan.kode_dokumen')
      //               ->select('*','dokumen_bapem_laporan.id as lap_id')
      //               ->get()->where("sasaran_id", $id);
    	// dd($surtug_pegawai);
    	return view('report.index',['surtug_pegawai' => $surtug_pegawai]);
    }

    public function create()
    {
    	return view('report.create');
    }
    public function show()
    {
    	return view('report.cover');
    }

    public function edit()
    {
      return view('report.edit');
    }

}
