<?php

use Illuminate\Support\Str;
use Pdo\Mysql;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for database operations. This is
    | the connection which will be utilized unless another connection
    | is explicitly specified when you execute a query / statement.
    |
    */

    'default' => env('DB_CONNECTION', 'sqlite'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Below are all of the database connections defined for your application.
    | An example configuration is provided for each database system which
    | is supported by Laravel. You're free to add / remove connections.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DB_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'prefix_indexes' => null,
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
            'busy_timeout' => null,
            'journal_mode' => null,
            'synchronous' => null,
            'transaction_mode' => 'DEFERRED',
            'pragmas' => [],
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                Mysql::ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mariadb' => [
            'driver' => 'mariadb',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                Mysql::ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
            'pooled' => env('DB_POOLED', false),
            'direct' => array_filter([
                'host' => env('DB_DIRECT_HOST'),
                'port' => env('DB_DIRECT_PORT'),
                'username' => env('DB_DIRECT_USERNAME'),
                'password' => env('DB_DIRECT_PASSWORD'),
                'sslmode' => env('DB_DIRECT_SSLMODE'),
            ]),
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run on the database.
    |
    */

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as Memcached. You may define your connection settings here.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug((string) env('APP_NAME', 'laravel')).'-database-'),
            'persistent' => env('REDIS_PERSISTENT', false),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
            'max_retries' => env('REDIS_MAX_RETRIES', 3),
            'backoff_algorithm' => env('REDIS_BACKOFF_ALGORITHM', 'decorrelated_jitter'),
            'backoff_base' => env('REDIS_BACKOFF_BASE', 100),
            'backoff_cap' => env('REDIS_BACKOFF_CAP', 1000),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
            'max_retries' => env('REDIS_MAX_RETRIES', 3),
            'backoff_algorithm' => env('REDIS_BACKOFF_ALGORITHM', 'decorrelated_jitter'),
            'backoff_base' => env('REDIS_BACKOFF_BASE', 100),
            'backoff_cap' => env('REDIS_BACKOFF_CAP', 1000),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Valkey Databases
    |--------------------------------------------------------------------------
    |
    | Valkey is a Linux Foundation, BSD-licensed key-value store forked from
    | Redis and fully wire-protocol compatible. This integration uses the
    | valkey-glide client. Every option below falls back to the matching
    | REDIS_* value, so if your app already uses Redis you can adopt Valkey
    | with zero new configuration:
    |
    |   • Set CACHE_STORE=valkey (and/or QUEUE_CONNECTION, SESSION_DRIVER), or
    |   • Keep CACHE_STORE=redis and set VALKEY_FROM_REDIS=true to route the
    |     existing "redis" bindings through Valkey transparently.
    |
    */

    'valkey' => [

        // When true, the existing "redis" cache store / queue / session
        // drivers (and Redis:: facade calls) transparently route through the
        // Valkey (GLIDE) backend — keep CACHE_STORE=redis for a zero-config swap.
        'from_redis' => env('VALKEY_FROM_REDIS', false),

        'client' => env('VALKEY_CLIENT', 'valkey_glide'),

        'options' => [
            'cluster' => env('VALKEY_CLUSTER', env('REDIS_CLUSTER')),
            'prefix' => env('VALKEY_PREFIX', env('REDIS_PREFIX')),
            'persistent' => env('VALKEY_PERSISTENT', env('REDIS_PERSISTENT')),
        ],

        'default' => [
            'url' => env('VALKEY_URL', env('REDIS_URL')),
            'host' => env('VALKEY_HOST', env('REDIS_HOST')),
            'username' => env('VALKEY_USERNAME', env('REDIS_USERNAME')),
            'password' => env('VALKEY_PASSWORD', env('REDIS_PASSWORD')),
            'port' => env('VALKEY_PORT', env('REDIS_PORT')),
            'database' => env('VALKEY_DB', env('REDIS_DB')),
            'max_retries' => env('VALKEY_MAX_RETRIES', env('REDIS_MAX_RETRIES')),
            'backoff_algorithm' => env('VALKEY_BACKOFF_ALGORITHM', env('REDIS_BACKOFF_ALGORITHM')),
            'backoff_base' => env('VALKEY_BACKOFF_BASE', env('REDIS_BACKOFF_BASE')),
            'backoff_cap' => env('VALKEY_BACKOFF_CAP', env('REDIS_BACKOFF_CAP')),
        ],

        'cache' => [
            'url' => env('VALKEY_URL', env('REDIS_URL')),
            'host' => env('VALKEY_HOST', env('REDIS_HOST')),
            'username' => env('VALKEY_USERNAME', env('REDIS_USERNAME')),
            'password' => env('VALKEY_PASSWORD', env('REDIS_PASSWORD')),
            'port' => env('VALKEY_PORT', env('REDIS_PORT')),
            'database' => env('VALKEY_CACHE_DB', env('REDIS_CACHE_DB')),
            'max_retries' => env('VALKEY_MAX_RETRIES', env('REDIS_MAX_RETRIES')),
            'backoff_algorithm' => env('VALKEY_BACKOFF_ALGORITHM', env('REDIS_BACKOFF_ALGORITHM')),
            'backoff_base' => env('VALKEY_BACKOFF_BASE', env('REDIS_BACKOFF_BASE')),
            'backoff_cap' => env('VALKEY_BACKOFF_CAP', env('REDIS_BACKOFF_CAP')),
        ],

        'use_tls'                 => env('VALKEY_TLS', false),
        'read_from'               => env('VALKEY_READ_FROM', 'primary'), // primary | prefer_replica | az_affinity | any
        'request_timeout'         => env('VALKEY_REQUEST_TIMEOUT', 250),
        'connection_timeout'      => env('VALKEY_CONNECTION_TIMEOUT', 250),
        'client_name'             => env('VALKEY_CLIENT_NAME'),
        'lazy_connect'            => env('VALKEY_LAZY_CONNECT', false),
        'inflight_requests_limit' => env('VALKEY_INFLIGHT_LIMIT', 1000),

        /*
        |----------------------------------------------------------------------
        | Valkey-Native Options (GLIDE)
        |----------------------------------------------------------------------
        |
        | The keys above are Redis-compatible and "just work" with existing
        | REDIS_* environment variables. The options below expose GLIDE's
        | Valkey-native capabilities — all are optional and default off/unset.
        | Add any of these keys to a connection array to enable them:
        |
        |
        | // Availability-zone affinity (same-AZ replica reads)
        | 'az_affinity' => [
        |     'enabled' => env('VALKEY_AZ_AFFINITY', false),
        |     'az'      => env('VALKEY_AZ'),
        | ],
        |
        | // AWS ElastiCache / MemoryDB IAM auth
        | 'iam_config' => null, // Set to array to enable
        |
        | // Reconnect / backoff strategy
        | 'reconnect_strategy' => [
        |     'num_of_retries' => env('VALKEY_RECONNECT_RETRIES', 3),
        |     'factor'         => env('VALKEY_RECONNECT_FACTOR', 2),
        |     'exponent_base'  => env('VALKEY_RECONNECT_EXP_BASE', 2),
        | ],
        |
        | // Client-side caching (server-assisted invalidation)
        | 'client_side_cache' => [
        |     'enabled'  => env('VALKEY_CSC_ENABLED', false),
        |     'max_size' => env('VALKEY_CSC_MAX_SIZE', 10000),
        | ],
        |
        | // Native payload compression (experimental)
        | 'compression' => [
        |     'enabled'   => env('VALKEY_COMPRESSION', false),
        |     'algorithm' => env('VALKEY_COMPRESSION_ALGO', 'lz4'),
        | ],
        |
        */

        'clusters' => [

            // 'default' => [
            //     ['host' => '10.0.0.1', 'port' => 7000],
            //     ['host' => '10.0.0.2', 'port' => 7001],
            //     ['host' => '10.0.0.3', 'port' => 7002],
            // ],
            // 'options' => [
            //     'read_from' => 'prefer_replica',
            //     'use_tls' => true,
            //     'az_affinity' => ['enabled' => true, 'az' => 'us-east-1a'],
            // ],

        ],

        'otel' => [
            'enabled' => env('VALKEY_OTEL_ENABLED', false),
            'endpoint' => env('VALKEY_OTEL_ENDPOINT'),
            'traces' => ['enabled' => true, 'sample_percentage' => env('VALKEY_OTEL_SAMPLE_PCT', 1)],
            'metrics' => ['enabled' => true],
            'flush_interval_ms' => env('VALKEY_OTEL_FLUSH_MS', 5000),
        ],

        'register_phpredis_aliases' => env('VALKEY_REGISTER_ALIASES', true),

    ],

];
