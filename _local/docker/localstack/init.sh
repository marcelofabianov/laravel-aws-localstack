#!/bin/bash

export AWS_DEFAULT_REGION=us-east-1

aws --endpoint-url=http://localhost:4566 s3 mb s3://laravel-bucket --no-sign-request
aws --endpoint-url=http://localhost:4566 sqs create-queue --queue-name laravel_queue --no-sign-request
