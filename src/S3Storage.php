<?php

namespace App;

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

class S3Storage implements FileStorage
{
    public function __construct(
        protected S3Client $s3Client,
        protected string $bucket
    ) {
    }

    public function put(string $path, string $content): void
    {
        try {
            $this->s3Client->putObject([
                'Bucket' => $this->bucket,
                'Key' => $path,
                'Body' => $content
            ]);
        } catch (S3Exception $e) {
            echo "There was an error uploading the file.\n";
        }
    }
}