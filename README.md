# Laravel / LocalStack / AWS SDK

Simualando AWS S3 com LocalStack e Laravel

## Commands

Criando um bucket no LocalStack

```bash
aws --endpoint-url=http://localhost:4566 s3 mb s3://<nome-do-bucket> --no-sign-request
```

Criando Queue no SQS LocalStack

```bash
aws sqs create-queue --queue-name laravel_queue
```
