<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UploadDocumentToS3Service
{
    public function __construct(
        protected $pathTemp
    ) {
    }

    public function handle(): bool
    {
        $diskTemp = Storage::disk('local');

        if (!$diskTemp->exists($this->pathTemp)) {
            Log::error('File not found');

            return false;
        }

        $document = $diskTemp->get($this->pathTemp);

        if (!$this->putDocumentToS3($document)) {
            Log::error('Error to put document to S3');

            return false;
        }

        return $this->deleteTempDocument();
    }

    private function deleteTempDocument(): bool
    {
        $disk = Storage::disk('local');
        if ($disk->exists($this->pathTemp)) {
            $disk->delete($this->pathTemp);

            if ($disk->exists($this->pathTemp)) {
                Log::error('Failed to delete temporary file: ' . $this->pathTemp);

                return false;
            }
            Log::info('Temporary file deleted: ' . $this->pathTemp);
        }

        return true;
    }

    private function putDocumentToS3(string $document): bool
    {
        $disk = Storage::disk('localstack');
        $filename = basename($this->pathTemp);  // Preserving the original filename

        $result = $disk->put('documents/' . $filename, $document);

        return $result !== false;
    }
}
