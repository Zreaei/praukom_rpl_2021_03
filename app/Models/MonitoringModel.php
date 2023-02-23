<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonitoringModel extends Model
{
    use HasFactory;
    protected $table = 'monitoring';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_monitoring';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_monitoring','pb_sekolah','operator','tgl_monitoring','laporan_monitoring'];
}
