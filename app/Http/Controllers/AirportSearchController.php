<?php

namespace App\Http\Controllers;

use App\Services\AmadeusService;
use Illuminate\Http\Request;


class AirportSearchController extends Controller
{
    protected $amadeusService;

    public function __construct(AmadeusService $amadeusService)
    {
        $this->amadeusService = $amadeusService;
    }
    public function index()
    {
        return view('search');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $airports = $this->amadeusService->searchAirports($keyword);

        return view('searchresult', ['airports' => $airports['data']]);
    }



    public function autocomplete(Request $request)
    {
        $keyword = $request->input('query');
        
        // If no data returned, return empty
        if (!$keyword) {
            return response()->json([]);
        }

        $airports = $this->amadeusService->searchAirports($keyword);

        // Data Processor
        $results = [];
        foreach ($airports['data'] as $airport) {
            $results[] = [
                'name' => $airport['name'],
                'iataCode' => $airport['iataCode'],
                'cityName' => $airport['address']['cityName'],
            ];
        }

        return response()->json($results);
    }
}
