<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', static function () {
    //$fileContents = Storage::disk('local')->get('public/example.txt');

    //$result = Storage::disk('localstack')->put('uploads/example.txt', $fileContents);

    //dd(env('LS_AWS_ENDPOINT'), $result);

    $files = Storage::disk('localstack')->files('uploads');

    //dump($result, $files);

    return response()->json([
        //'result' => $result,
        'files' => $files
    ]);
});
