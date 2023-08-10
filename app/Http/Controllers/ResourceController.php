<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use PDF;

class ResourceController extends Controller
{

    public function resource_homepage()
    {

        return view('resource.home');
    }

    public function guideline()
    {

        return view('resource.guideline');
    }

    public function guideline_pdf()
    {
        $pdf = PDF::loadview('resource.pdf1');
        return $pdf->download('product_guideline.pdf');
    }
    public function pdfreport()
    {
        $data = Price::all();

        view()->share('prices', $data);
        $pdf = PDF::loadView('resource.pdf2', [$data]);
        return $pdf->download('price_report.pdf');
    }

    public function pricereport()
    {
        $prices = Price::all();

        return view(
            'resource.price',
            [
                'prices' => $prices
            ]
        );
    }
}
