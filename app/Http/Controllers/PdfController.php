<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePDF($id)
    {
        
        $data =appointment::find($id);
        $pdf = FacadePdf::loadView('user.document', compact('data'));
        
        // $pdf->loadView('user.document', $data);
        return $pdf->download('Appointment.pdf');
    }
}
