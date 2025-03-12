<?php

namespace App;

use Aws\S3\S3Client;
use Exception;

class Storage
{
    /**
     * @throws Exception
     */
    public static function resolve(): S3Storage|LocalStorage
    {
        $storageMethod = $_ENV['FILE_STORAGE'];

        if ($storageMethod === 's3') {
            // Instantiate an Amazon S3 client.
            $s3Client = new S3Client([
                'version' => 'latest',
                'region' => 'eu-central-1',
                'credentials' => [
                    'key' => $_ENV['S3_KEY'],
                    'secret' => $_ENV['S3_SECRET']
                ]
            ]);

            return new S3Storage($s3Client, $_ENV['S3_BUCKET']);
        } elseif ($storageMethod === 'local') {
            return new LocalStorage();
        }

        throw new Exception('Unknown storage type');
    }
}