<?php

namespace Bantenprov\RKSJenPenDas\Models\Bantenprov\RKSJenPenDas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RKSJenPenDas extends Model
{

    protected $table = 'rks_jen_pen_dass';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

    public function getProvince()
    {
        return $this->hasOne('Bantenprov\RKSJenPenDas\Models\Bantenprov\RKSJenPenDas\Province','id','province_id');
    }

    public function getRegency()
    {
        return $this->hasOne('Bantenprov\RKSJenPenDas\Models\Bantenprov\RKSJenPenDas\Regency','id','regency_id');
    }

}

