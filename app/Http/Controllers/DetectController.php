<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DetectController extends Controller
{
    // public function result(Request $request)
    // {
    //     $request->validate([
    //         'content' => 'required',
    //     ]);

    //     $url = 'https://writer.com/wp-admin/admin-ajax.php';

    //     $headers = [
    //         'Content-Type' => 'application/x-www-form-urlencoded',
    //         'Accept' => 'text/plain',
    //     ];

    //     $body = [
    //         'action' => 'ai_content_detector_recaptcha',
    //         'inputs' => $request['content'],
    //     ];

    //     $response = Http::withHeaders($headers)->post($url, $body);

    //     return response()->json($response->body());
    // }

    public function result(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);
        $url = 'https://writer.com/wp-admin/admin-ajax.php';

        $headers = [
            'content-type' => 'application/x-www-form-urlencoded',
            'Accept' => 'text/plain',
            'x-requested-with' => 'XMLHttpRequest',
        ];

        $data = [
            'action' => 'ai_content_detector_recaptcha',
            'inputs' => $request['content'],
        ];

        $response = Http::withHeaders($headers)->put($url, $data);

        // Process the API response
        $apiResponse = json_decode($response->body(), true);

        return response()->json(['response' => $apiResponse]);
    }

    // ##################################################

    public function detect(Request $request)
    {
        // $request->validate([
        //     'content' => 'required',
        // ]);
        $content = $request->input('detector');

        $url = env('URL_ENDPOINT');

        $client = new Client();

        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Accept' => 'text/plain',
            'x-requested-with' => 'XMLHttpRequest',
        ];

        $data = [
            'form_params' => [
                'action' => 'ai_content_detector_recaptcha',
                'inputs' => $content,
            ],
        ];

        $response = $client->post($url, [
            'headers' => $headers,
            'form_params' => $data['form_params'],
        ]);

// Process the API response
        $apiResponse = json_decode($response->getBody(), true);
        return view('app.result', ['result' => $apiResponse]);

    }

}
