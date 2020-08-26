<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Tenant\Voidedtiket;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VoidedtiketController extends Controller
{

    public function store(Request $request){  
        $data = $request->validate([
            'document_id' => 'required',
            'motivo'    => 'required',
        ]);      
        $now = Carbon::now('America/Lima');
        Voidedtiket::create([
            'document_id' => $data['document_id'], 
             'motivo'      => $data['motivo']
             ]
        );

        return [
            'success' => true,
            'message' => 'Anulado con exito'
        ];
    }
}
