<?php

namespace Bantenprov\RasioGMSdMi\Models\Bantenprov\RasioGMSdMi;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RasioGMSdMi extends Model
{

    protected $table = 'rasio_guru_murid_sd_mis';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

    public function getProvince()
    {
        return $this->hasOne('Bantenprov\RasioGMSdMi\Models\Bantenprov\RasioGMSdMi\Province','id','province_id');
    }

    public function getRegency()
    {
        return $this->hasOne('Bantenprov\RasioGMSdMi\Models\Bantenprov\RasioGMSdMi\Regency','id','regency_id');
    }

}

