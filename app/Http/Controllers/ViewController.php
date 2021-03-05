<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// needed to access configuration file
use Illuminate\Support\Facades\Storage;

class ViewController extends Controller
{
    // view root/index
    public function index() {

        // get data from configuration.json file
        $config = json_decode(Storage::disk('local')->get('configuration.json'), true);
        $configUrl = $config['url'];
        $configInfo = $config['info'];
        $configReference = $config['reference'];

        // get data from the API JSON file
        $data = json_decode(file_get_contents($configUrl), true);
        $usd = $data['bpi']['USD']['rate'];
        $eur = $data['bpi']['EUR']['rate'];
        $timestamp = $data['time']['updated'];

        // compact all data to be passed to index view
        $data = compact(
            'configUrl', 
            'configInfo', 
            'configReference',
            'usd',
            'eur',
            'timestamp'
        );

        // display the index page with data
        return view('index', $data);
    }
}
