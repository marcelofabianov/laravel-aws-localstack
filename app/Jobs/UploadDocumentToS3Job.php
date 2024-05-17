<?php

namespace App\Jobs;

use App\Services\UploadDocumentToS3Service;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class UploadDocumentToS3Job implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        protected $pathTemp
    )
    {
        //
    }

    public function handle(): void
    {
        $service = new UploadDocumentToS3Service($this->pathTemp);
        $result = $service->handle();

        if ($result) {
            Log::info('Document uploaded to S3');
        } else {
            Log::error('Document not uploaded to S3');
        }
    }
}
