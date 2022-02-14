<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'firebase' => [
        'database_url' => env('FIREBASE_DATABASE_URL', 'https://dulich-3ea74-default-rtdb.firebaseio.com'),
        'project_id' => env('FIREBASE_PROJECT_ID', 'dulich-3ea74'),
        'private_key_id' => env('FIREBASE_PRIVATE_KEY_ID', '15cd131b0960a7791bdf37ed14123890337d0706'),
        'private_key' => str_replace("\\n", "\n", env('FIREBASE_PRIVATE_KEY', '-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCuQ79mV5O2qUM7\nTuQ3n1aaNbLPynkfsPnvFa/rBv2gtKpMa86CPe5cUFOQ5qCmGXqfJ2/pzBHhpdwC\nqfMlX7vl2HAtVFkCvizLCevTG19yV4Bzowp3ACXFqmoLmm+jzyJ8ZKZe/lAxL4h3\n5aBYi5amwpZfvTM9QD8rUcnCETljUM4EM4z0/FkESqUwVxG1D48GDHAZ3oJ0DOQl\ndY/ouYV+xmdBwYnE7C9aFCaFhnbZZx70C/IcyZH5R7hcfAOZZmLkH23jYRFmm+1v\nKI8+X+6q2ghaQTGIs19GWtoiZR8L5fbH0D/YadTrz+cP2s0lVGeevuJBOmo/1Suf\nbmfMgWVFAgMBAAECggEAInug7OcxAVDajyqUAcarnB26maAC2kjKmCsGMb9jIjEF\nztP5W+/V0hoKAy8DxIJfr40d+dlKA4jusW9AQBnCxF9RCUM6zs5jbjTzH4W33Bgh\nAKDXUgdrMgM/8zZW14cGF6/R9ROlOiph+nmrgkHy6GIyX9UAReNH7LJFNnvyi2pv\nCSk7oF29Cj1PmDA1eNzheKL+w8gE2wZWKT8TJsPlTEGfdJg1xysuI/w9KDAZDfic\ntmT9V4I9ZXEhZl8eAZe5bXgl3NzMqdiQAMfDpeeet+Lk4aQ0idREbDPun0SD/gGW\nZN8OaVRPkc/OhsofDAliUz8M0xU5ppJiOGAF/C554QKBgQDa2hQxa9xko8GF+aFV\n8mJwY2Il4g/dM702iFafzp0Oo89MmXcIjqRtEHFd2ANtry3NZAO7560PTSvPhhSm\nC2FNzKWoRUJ9eTZdnh1vgyxgazSipriCkqN/bcv6/r+BaQ/bRjzJ2oFEymxwVyFY\n3zHymWMM+Yw13Lzf/1i6Hm7w5QKBgQDL2DBoXrXFrmt8HNQ6uF6id5oW/uoTw0GV\nr8VfSyueatIn0zBYm7FwSsiAEtcAk5Ih7HaL9ddlVFFFcff2VRas/HqhCIhOu+NS\nXhB/7awwAx6S+HYPRQIYcU2gs3LvzPYHo1znA3TB2rhMAZGn1UUANXG0R/X3eMtD\nG2xvk8I84QKBgQC3Y0jKhQzAlGxFHQJxp9OPQ+hpwD306TcjrCmSbiszqla6ZFrX\no9fqwH2O2sU8sy+ZTbbHTYK6MLuGgV9qKF0YOWWTVL47sEe7ORSHbg7QmOUZasVw\nPPqefF4SbEgDZAtyfi/QIbZy84DcvlZmR1luZdQXekFgnSD0Pt+Vzoy+dQKBgALW\n+y2pDB055dNvz2EWCnN2+RWS7Y3i7Xn5XeWK9Yuab10Qqx7A5ILs98gY+xfN9n40\nfh5LCXom547xHIQ5ATzds5Oku8llArC2EMLHe9ubX4Sqo3JpArN2eJ9hgJtonpDS\nrMunF6xPsLuWVgIhjXmIRRI+4mVVMHe53RPc2hrhAoGAVyQgC5y0zlPFkL08VyF7\npPDAuTnG6SV95MQLMWCOiptEpYBuS9yzhHi3Nj7wSVwTTYtjMiy60K9ufBqh6XE7\nRgX1szla6EnDkisrJARkCqidK/ygJFECupuk3iSwJnW9tF1RNce+kf/s7WjE+8r+\nAgYvPIpPbAutjGY+ze9cS+s=\n-----END PRIVATE KEY-----\n')),
        'client_email' => env('FIREBASE_CLIENT_EMAIL', 'firebase-adminsdk-bgbjm@dulich-3ea74.iam.gserviceaccount.com'),
        'client_id' => env('FIREBASE_CLIENT_ID', '113017560199267583466'),
        'client_x509_cert_url' => env('FIREBASE_CLIENT_x509_CERT_URL', 'https://www.googleapis.com/oauth2/v1/certs'),
    ]

];
