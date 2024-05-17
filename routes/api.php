<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/', static function (Request $request) {
    $document = $request->file('document');

    $path = $document->store('temp/documents');

    ds($path)->label('Path');

    \App\Jobs\UploadDocumentToS3Job::dispatch($path);

    return response()->json([
        'message' => 'Document uploaded to S3'
    ]);
});

/*
curl --request POST \
  --url http://localhost:8000/api \
  --header 'Accept: applications/json' \
  --header 'Content-Type: multipart/form-data' \
  --form document=@/Users/marcelofabianov/Documents/Marcelo.pdf
 */
