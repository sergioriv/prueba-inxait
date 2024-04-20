<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{
    public function export()
    {
        if (!\Auth::check()) return back();

        return Excel::download(new \App\Exports\CustomerExport(), "Clientes registrados.xlsx");
    }
}
