<?php

namespace App\Http\Controllers;

use App\Models\pengajuan_replacement_class;
use Illuminate\Http\Request;
use PDF;

class laporanController extends Controller
{
    public function index(){

        $replacement = pengajuan_replacement_class::all();

        return view ('admin/laporan/replacementIndex', ['replacement'=>$replacement]);
    }

    public function cetak_pdf(){

        $replacement = pengajuan_replacement_class::all();

        $pdf = PDF::loadview('admin/laporan/replacementPrint',['replacement'=>$replacement]);

        return $pdf->download('pengajuan-replacement');
    }
}

?>

