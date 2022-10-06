<?php

namespace App\Http\Controllers;

use App\Models\ProductAudit;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $product_audits = ProductAudit::with('user')->get();
        return response()->json(['result' => ['data' => $product_audits, 'code' => 200]]);
    }
}
