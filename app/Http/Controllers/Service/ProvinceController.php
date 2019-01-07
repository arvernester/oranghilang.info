<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\JsonResponse;

class ProvinceController extends Controller
{
    public function index(): JsonResponse
    {
        $provinces = Province::orderBy('name', 'ASC')
            ->paginate(5);

        return response()->json($provinces);
    }
}
