<?php namespace Bantenprov\RasioGMSdMi\Http\Controllers;

/* require */
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\RasioGMSdMi\Facades\RasioGMSdMi;

/* Models */
use Bantenprov\RasioGMSdMi\Models\Bantenprov\RasioGMSdMi\RasioGMSdMi as PdrbModel;
use Bantenprov\RasioGMSdMi\Models\Bantenprov\RasioGMSdMi\Province;
use Bantenprov\RasioGMSdMi\Models\Bantenprov\RasioGMSdMi\Regency;

/* etc */
use Validator;

/**
 * The RasioGMSdMiController class.
 *
 * @package Bantenprov\RasioGMSdMi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioGMSdMiController extends Controller
{

    protected $province;

    protected $regency;

    protected $rasio_guru_murid_sd_mi;

    public function __construct(Regency $regency, Province $province, PdrbModel $rasio_guru_murid_sd_mi)
    {
        $this->regency  = $regency;
        $this->province = $province;
        $this->rasio_guru_murid_sd_mi     = $rasio_guru_murid_sd_mi;
    }

    public function index(Request $request)
    {
        /* todo : return json */

        return 'index';

    }

    public function create()
    {

        return response()->json([
            'provinces' => $this->province->all(),
            'regencies' => $this->regency->all()
        ]);
    }

    public function show($id)
    {

        $rasio_guru_murid_sd_mi = $this->rasio-guru-murid-sd-mi->find($id);

        return response()->json([
            'negara'    => $rasio-guru-murid-sd-mi->negara,
            'province'  => $rasio-guru-murid-sd-mi->getProvince->name,
            'regencies' => $rasio-guru-murid-sd-mi->getRegency->name,
            'tahun'     => $rasio-guru-murid-sd-mi->tahun,
            'data'      => $rasio-guru-murid-sd-mi->data
        ]);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'negara'        => 'required',
            'province_id'   => 'required',
            'regency_id'    => 'required',
            'kab_kota'      => 'required',
            'tahun'         => 'required|integer',
            'data'          => 'required|integer',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'title'     => 'error',
                'message'   => 'add failed',
                'type'      => 'failed',
                'errors'    => $validator->errors()
            ]);
        }

        $check = $this->rasio-guru-murid-sd-mi->where('regency_id',$request->regency_id)->where('tahun',$request->tahun)->count();

        if($check > 0)
        {
            return response()->json([
                'title'         => 'error',
                'message'       => 'Data allready exist',
                'type'          => 'failed',
            ]);

        }else{
            $data = $this->rasio-guru-murid-sd-mi->create($request->all());

            return response()->json([
                    'type'      => 'success',
                    'title'     => 'success',
                    'id'      => $data->id,
                    'message'   => 'PDRB '. $this->regency->find($request->regency_id)->name .' tahun '. $request->tahun .' successfully created',
                ]);
        }

    }

    public function update(Request $request, $id)
    {
        /* todo : return json */
        return '';

    }

    public function destroy($id)
    {
        /* todo : return json */
        return '';

    }
}

