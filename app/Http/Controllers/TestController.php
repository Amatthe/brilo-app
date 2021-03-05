<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    // 4: Local tests of how to handle the API output
    /*
    |public function test() {
    |    $data = json_decode(Storage::disk('local')->get('testdata.json'), true);
    |    $usd = $data['bpi']['USD']['rate'];
    |    $eur = $data['bpi']['EUR']['rate'];
    |    return view('test', compact('usd', 'eur'));
    |}
    */

    // 3: tests if I can make a link to the page in JSON file 
    /*
    |public function test() {
    |    $data = json_decode(Storage::disk('local')->get('configuration.json'), true);
    |    $dataUrl = $data['url'];
    |    return view('test', compact('dataUrl'));
    |}
    */

    // 2: tests if I can read a JSON file from storage
    /*
    |public function test() {
    |    $data = Storage::disk('local')->get('configuration.json');
    |    return(json_decode($data, true));
    |}
    */
    
    // 1: tests controller and JSON execution
    /*
    |public function test() {
    |    return response()->json([
    |        'name' => 'Test',
    |        'number' => '1'
    |    ]);
    |}
    */
}
