<?php

namespace App\Http\Controllers;
use Mpdf\Mpdf;
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


    public function cekinput() {
        return view('report.cekinput');
    }

    /*
    /cetal laporan base on id
    */
    public function cetaklaporan($id) {

        //namatabel
        $table = 'reports';
        
        //get data dari database where id
        $data = DB::connection('secondary')->table($table)->where('id',$id)->first();

        //array data to generate
        $data = array(
            'cover'     => $data->cover,    
            'daftarisi' => $data->daftarisi,
            'bab'       => $data->bab,
            'lampiran'  => $data->lampiran ,
        );

        //create semacam pdf name
        $filename = date('Y-m-d H:i:s').'.pdf';

       //fungsi generate ke pdf
        $mpdf = new Mpdf([
            'tempDir'       => __DIR__ . '/tmp',
            'margin_top'    => 20,
            'margin_left'   => 30,
            'margin_right'  => 20,
            'margin_bottom' => 20,
        ]);

        //generate output data
        $mpdf->AddPage('','','1','','on');
        $mpdf->WriteHTML($data['cover'] );
        $mpdf->SetHeader('Ini adalah laporan mengenai .............................');
        $mpdf->AddPage('','','1','','off');
        $mpdf->WriteHTML($data['daftarisi']);
        $mpdf->SetHeader('Ini adalah laporan mengenai .............................');
        $mpdf->SetFooter('Laporan Bulan ke x|'.$filename.'.|{PAGENO}');
        $mpdf->AddPage();
        $mpdf->WriteHTML($data['bab']);
        $mpdf->AddPage();
        $mpdf->WriteHTML($data['lampiran']);
        $mpdf->Output($filename, 'I');

    }

    /*
    fungsi di guanakn untuk membuat laporan data
    */
    public function laporan(request $request) {


        //request data form post
        $input = $request->except(['_token']);

        //namatabel
        $table = 'reports';

        //insert data dari input
        DB::connection('secondary')->table($table)->insert($input);


        //request singgle data
        $cover      = $request->input('cover');
        $daftarisi  = $request->input('daftarisi');
        $bab        = $request->input('bab');
        $lampiran   = $request->input('lampiran');

        //isi dengan variable sesuai kebutuhan
        $data = array(
            'cover'     => $cover,    
            'daftarisi' => $daftarisi,
            'bab'       => $bab,
            'lampiran'  => $lampiran ,
        );

        //create semacam pdf name
        $filename = date('Y-m-d H:i:s').'.pdf';

        //fungsi generate ke pdf
        $mpdf = new Mpdf([
            'tempDir'       => __DIR__ . '/tmp',
            'margin_top'    => 20,
            'margin_left'   => 30,
            'margin_right'  => 20,
            'margin_bottom' => 20,
        ]);

        //generate output data
        $mpdf->SetHeader('Ini adalah laporan mengenai .............................');
        $mpdf->SetFooter('Laporan Bulan ke x|'.$filename.'.|{PAGENO}');
        $mpdf->AddPage('','','1','','on');
        $mpdf->WriteHTML($data['cover'] );
        $mpdf->AddPage('','','1','','off');
        $mpdf->WriteHTML($data['daftarisi']);
        $mpdf->AddPage();
        $mpdf->WriteHTML($data['bab']);
        $mpdf->AddPage();
        $mpdf->WriteHTML($data['lampiran']);
        $mpdf->Output($filename, 'I');
    }

}
