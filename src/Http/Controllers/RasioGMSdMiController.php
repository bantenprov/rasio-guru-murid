<?php namespace Bantenprov\RKSJenPenDas\Http\Controllers;

/* require */
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\RKSJenPenDas\Facades\RKSJenPenDas;

/* Models */
use Bantenprov\RKSJenPenDas\Models\Bantenprov\RKSJenPenDas\RKSJenPenDas as PdrbModel;
use Bantenprov\RKSJenPenDas\Models\Bantenprov\RKSJenPenDas\Province;
use Bantenprov\RKSJenPenDas\Models\Bantenprov\RKSJenPenDas\Regency;

/* etc */
use Validator;

/**
 * The RKSJenPenDasController class.
 *
 * @package Bantenprov\RKSJenPenDas
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RKSJenPenDasController extends Controller
{

    protected $province;

    protected $regency;

    protected $rks_jen_pen_das;

    public function __construct(Regency $regency, Province $province, PdrbModel $rks_jen_pen_das)
    {
        $this->regency  = $regency;
        $this->province = $province;
        $this->rks_jen_pen_das     = $rks_jen_pen_das;
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

        $rks_jen_pen_das = $this->rks-jen-pen-das->find($id);

        return response()->json([
            'negara'    => $rks-jen-pen-das->negara,
            'province'  => $rks-jen-pen-das->getProvince->name,
            'regencies' => $rks-jen-pen-das->getRegency->name,
            'tahun'     => $rks-jen-pen-das->tahun,
            'data'      => $rks-jen-pen-das->data
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

        $check = $this->rks-jen-pen-das->where('regency_id',$request->regency_id)->where('tahun',$request->tahun)->count();

        if($check > 0)
        {
            return response()->json([
                'title'         => 'error',
                'message'       => 'Data allready exist',
                'type'          => 'failed',
            ]);

        }else{
            $data = $this->rks-jen-pen-das->create($request->all());

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

