<?php

namespace App\Http\Controllers;

use App\DataTables\PengirimanDataTable;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function getPengiriman(PengirimanDataTable $dataTable)
    {
        return $dataTable->with('is_user', false)->render("");
    }

    public function getPengirimanUser(PengirimanDataTable $dataTable)
    {
        return $dataTable->with('is_user', true)->render("");
    }
}
