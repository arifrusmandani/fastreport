<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surtugpegawai extends Model
{
    protected $connection = 'mysql';
    protected $table = 'surtug_pegawai';
    protected $fillable =['stp_id','stp_nomor','stp_nip','stp_nama','stp_gol','stp_pangkat','stp_jabatan','stp_tgs_sbg','stp_tglmulai','stp_tglselesai','stp_lama','stp_duplikasi_id','stp_ispns','stp_periode','keu_perjadin_id','abstrak','file_laporan','status_laporan','status_surat'];
}
