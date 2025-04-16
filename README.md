## TICKET SALE SERVICE ##

A ticket-sale platform API Only build for portfolio purposes, here I will show some of my knowledge using Laravel, Redis, MySQL, PHP and PEST for tests.
This platform will be able to register an admin user, register an producer, register an common user, register events, register sectors, tickets and sell this tickets with inventory management, unique ticket generation, ticket validation and other features.
I will use fake payment methods just to simulate a real payment.

#### STACK ####
+ PHP 8.3
+ Laravel 12
+ MySQL
+ Redis

#### QUEUES ####
`php artisan queue:work --queue=payments` - Will run payments queue

`php artisan queue:work --queue=tickets` - Will run ticket generation queue

`php artisan queue:work --queue=emails` - Will run email queue to send emails

#### QUEUES ####
`php artisan migrate` - Will run all migrations

#### TESTS ####
You can use `php artisan test` to run all tests.


### DOCUMENTATION ###
