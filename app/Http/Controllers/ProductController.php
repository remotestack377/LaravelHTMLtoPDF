<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

use PDF;

class ProductController extends Controller {
    // Show products
    public function getProducts(){
      $product = Product::all();
      return view('home', compact('product'));
    }

    // Export to PDF
    public function exportPDF() {
        
        $p = Product::all();

        view()->share('p', $p);
        $pdf_doc = PDF::loadView('export_pdf', $p);

        return $pdf_doc->download('pdf.pdf');
    }    
}

