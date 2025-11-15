<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View as ContractsView;
use Illuminate\Foundation\Vite;
use Illuminate\Http\Request;
use Illuminate\View\View as IlluminateView;
use Spatie\FlareClient\View;

class ServiceController extends Controller
{
    //

    function index() : ContractsView {
        $json = file_get_contents(storage_path('json/services.json'));
        $data = json_decode($json, true);
        $services = $data['services'];

        return view('services.index', [
            'services' => $services
        ]);
    }

    function details($slug) : ContractsView {
        $json = file_get_contents(storage_path('json/services.json'));
        $data = json_decode($json, true);
        $services = $data['services'];

        $serviceDetails = null;
        foreach ($services as $service) {
            if ($service['slug'] === $slug) {
                $serviceDetails = $service;
                break;
            }
        }

        if (!$serviceDetails) {
            abort(404);
        }

        $otherServices = array_values(array_filter($services, function ($s) use ($slug) {
            return ($s['slug'] ?? null) !== $slug;
        }));

        return view('services.details', [
            'service' => $serviceDetails,
            'otherServices' => $otherServices
        ]);
    }
}
