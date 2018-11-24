<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateHasilAPIRequest;
use App\Http\Requests\API\UpdateHasilAPIRequest;
use App\Models\Hasil;
use App\Models\Jenisparameter;
use App\Models\Unit;
use App\Repositories\HasilRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class IkanController
 * @package App\Http\Controllers\API
 */

class HasilAPIController extends AppBaseController
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $unit=Unit::find($input['unit_id']);
        $jenis_parameter=JenisParameter::find($input['jenis_parameter_id']);
        $unit->jenisParameters()->attach($jenis_parameter,['value' => $input['value']]);
        return $this->sendResponse($unit->toArray(),'Hasil saved successfully');
    }
    
}
