<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrowdReport extends Model
{
    protected $fillable = ['bulan', 'id_pendanaan', 'tahun'];

    protected $table = 'laporan_crowd';
}