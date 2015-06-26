<?php
namespace DreamFactory\Core\Aws\Database\Seeds;

use DreamFactory\Core\Aws\Models\AwsConfig;
use DreamFactory\Core\Aws\Services\DynamoDb;
use DreamFactory\Core\Aws\Services\S3;
use DreamFactory\Core\Aws\Services\Ses;
use DreamFactory\Core\Aws\Services\SimpleDb;
use DreamFactory\Core\Aws\Services\Sns;
use DreamFactory\Core\Database\Seeds\BaseModelSeeder;
use DreamFactory\Core\Models\EmailServiceConfig;
use DreamFactory\Core\Models\ServiceType;

class DatabaseSeeder extends BaseModelSeeder
{
    protected $modelClass = ServiceType::class;

    protected $records = [
        [
            'name'           => 'aws_s3',
            'class_name'     => S3::class,
            'config_handler' => AwsConfig::class,
            'label'          => 'AWS S3 file service',
            'description'    => 'File service supporting the AWS S3 file system.',
            'group'          => 'files',
            'singleton'      => 1
        ],
        [
            'name'           => 'aws_dynamodb',
            'class_name'     => DynamoDb::class,
            'config_handler' => AwsConfig::class,
            'label'          => 'AWS DynamoDb service',
            'description'    => 'NoSQL database service supporting the AWS DynamoDb system.',
            'group'          => 'database, nosql',
            'singleton'      => 1
        ],
        [
            'name'           => 'aws_simpledb',
            'class_name'     => SimpleDb::class,
            'config_handler' => AwsConfig::class,
            'label'          => 'AWS SimpleDb service',
            'description'    => 'NoSQL database service supporting the AWS SimpleDb system.',
            'group'          => 'database, nosql',
            'singleton'      => 1
        ],
        [
            'name'           => 'aws_sns',
            'class_name'     => Sns::class,
            'config_handler' => AwsConfig::class,
            'label'          => 'AWS SNS service',
            'description'    => 'Push notification service supporting the AWS SNS system.',
            'group'          => 'push',
            'singleton'      => 1
        ],
        [
            'name'           => 'aws_ses',
            'class_name'     => Ses::class,
            'config_handler' => EmailServiceConfig::class,
            'label'          => 'AWS SES service',
            'description'    => 'Email service supporting the AWS SES system.',
            'group'          => 'emails',
            'singleton'      => 1
        ]
    ];
}