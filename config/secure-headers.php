<?php

return [

    /*
     * X-Content-Type-Options
     *
     * Reference: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Content-Type-Options
     *
     * Available Value: 'nosniff'
     */

    'x-content-type-options' => 'nosniff',

    /*
     * X-Download-Options
     *
     * Reference: https://msdn.microsoft.com/en-us/library/jj542450(v=vs.85).aspx
     *
     * Available Value: 'noopen'
     */

    'x-download-options' => 'noopen',

    /*
     * X-Frame-Options
     *
     * Reference: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Frame-Options
     *
     * Available Value: 'deny', 'sameorigin', 'allow-from <uri>'
     */

    'x-frame-options' => 'sameorigin',

    /*
     * X-Powered-By
     *
     * Note: it will not add to response header if the value is empty string.
     *
     * Also, verify that expose_php is turned Off in php.ini.
     * Otherwise the header will still be included in the response.
     *
     * Reference: https://github.com/SLOYakuza/secure-headers/issues/58#issuecomment-782332442
     */

    'x-powered-by' => '',

    /*
     * Referrer-Policy
     *
     * Reference: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Referrer-Policy
     *
     * Available Value: 'no-referrer', 'no-referrer-when-downgrade', 'origin', 'origin-when-cross-origin',
     *                  'same-origin', 'strict-origin', 'strict-origin-when-cross-origin', 'unsafe-url'
     */

    'referrer-policy' => 'strict-origin-when-cross-origin',

    /*
     * HTTP Strict Transport Security
     *
     * Reference: https://developer.mozilla.org/en-US/docs/Web/Security/HTTP_strict_transport_security
     *
     * Please ensure your website had set up ssl/tls before enable hsts.
     */

    'hsts' => [
        'enable' => true,
        'max-age' => 31536000,
        'include-sub-domains' => true,
        'preload' => true,
    ],

    /*
     * Permissions Policy
     *
     * Reference: https://w3c.github.io/webappsec-permissions-policy/
     */

    'permissions-policy' => [
        'enable' => true,
        
        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/accelerometer
        'accelerometer' => [
            'none' => true,
            '*' => false,
            'self' => false,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/ambient-light-sensor
        'ambient-light-sensor' => [
            'none' => true,
            '*' => false,
            'self' => false,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/autoplay
        'autoplay' => [
            'none' => true,
            '*' => false,
            'self' => false,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/battery
        'battery' => [
            'none' => true,
            '*' => false,
            'self' => false,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/camera
        'camera' => [
            'none' => true,
            '*' => false,
            'self' => false,
            'origins' => [],
        ],

        // https://www.chromestatus.com/feature/5690888397258752
        'cross-origin-isolated' => [
            'none' => true,
            '*' => false,
            'self' => false,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/display-capture
        'display-capture' => [
            'none' => false,
            '*' => false,
            'self' => true,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/document-domain
        'document-domain' => [
            'none' => false,
            '*' => true,
            'self' => true,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/encrypted-media
        'encrypted-media' => [
            'none' => false,
            '*' => false,
            'self' => true,
            'origins' => [],
        ],

        // https://wicg.github.io/page-lifecycle/#execution-while-not-rendered
        'execution-while-not-rendered' => [
            'none' => false,
            '*' => true,
            'self' => true,
            'origins' => [],
        ],

        // https://wicg.github.io/page-lifecycle/#execution-while-out-of-viewport
        'execution-while-out-of-viewport' => [
            'none' => false,
            '*' => true,
            'self' => true,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/fullscreen
        'fullscreen' => [
            'none' => false,
            '*' => false,
            'self' => true,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/geolocation
        'geolocation' => [
            'none' => true,
            '*' => false,
            'self' => false,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/gyroscope
        'gyroscope' => [
            'none' => true,
            '*' => false,
            'self' => false,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/magnetometer
        'magnetometer' => [
            'none' => true,
            '*' => false,
            'self' => false,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/microphone
        'microphone' => [
            'none' => true,
            '*' => false,
            'self' => false,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/midi
        'midi' => [
            'none' => true,
            '*' => false,
            'self' => false,
            'origins' => [],
        ],

        // https://drafts.csswg.org/css-nav-1/
        'navigation-override' => [
            'none' => false,
            '*' => false,
            'self' => true,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/payment
        'payment' => [
            'none' => false,
            '*' => false,
            'self' => true,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/picture-in-picture
        'picture-in-picture' => [
            'none' => false,
            '*' => true,
            'self' => true,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/publickey-credentials-get
        'publickey-credentials-get' => [
            'none' => true,
            '*' => false,
            'self' => false,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/screen-wake-lock
        'screen-wake-lock' => [
            'none' => true,
            '*' => false,
            'self' => false,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/sync-xhr
        'sync-xhr' => [
            'none' => false,
            '*' => true,
            'self' => true,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/usb
        'usb' => [
            'none' => true,
            '*' => false,
            'self' => false,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/web-share
        'web-share' => [
            'none' => false,
            '*' => false,
            'self' => true,
            'origins' => [],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy/xr-spatial-tracking
        'xr-spatial-tracking' => [
            'none' => true,
            '*' => false,
            'self' => false,
            'origins' => [],
        ],
    ],

    /*
     * Content Security Policy
     *
     * Reference: https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP
     */

    'csp' => [
        'enable' => true,

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy-Report-Only
        'report-only' => false,

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/report-to
        'report-to' => '',

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/report-uri
        'report-uri' => [
            // uri
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/block-all-mixed-content
        'block-all-mixed-content' => false,

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/upgrade-insecure-requests
        'upgrade-insecure-requests' => true,

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/base-uri
        'base-uri' => [
            'self' => true
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/child-src
        'child-src' => [
            //
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/connect-src
        'connect-src' => [
            'self' => true,
            'schemes' => [
                'ws:'
            ],
            'allow' => [
                '*.pusher.com',
                '*.sc.care',
            ],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/default-src
        'default-src' => [
            'self' => true,
            'allow' => [
                'localhost:3000'
            ]
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/font-src
        'font-src' => [
            'self' => true,
            'allow' => [
                '*.typekit.net',
                'fonts.gstatic.com',
            ],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/form-action
        'form-action' => [
            //
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/frame-ancestors
        'frame-ancestors' => [
            //
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/frame-src
        'frame-src' => [
            'self' => true,
            'allow' => [
                'localhost:3000'
            ],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/img-src
        'img-src' => [
            'self' => true,
            'schemes' => [
                'data:'
            ],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/manifest-src
        'manifest-src' => [
            //
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/media-src
        'media-src' => [
            'self' => true,
            'allow' => [
                'localhost:3000'
            ]
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/navigate-to
        'navigate-to' => [
            'unsafe-allow-redirects' => false,
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/object-src
        'object-src' => [
            'none' => true
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/plugin-types
        'plugin-types' => [
            // 'application/pdf',
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/prefetch-src
        'prefetch-src' => [
            //
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/require-trusted-types-for
        'require-trusted-types-for' => [
            'script' => false,
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/sandbox
        'sandbox' => [
            'enable' => false,
            'allow-downloads-without-user-activation' => false,
            'allow-forms' => false,
            'allow-modals' => false,
            'allow-orientation-lock' => false,
            'allow-pointer-lock' => false,
            'allow-popups' => false,
            'allow-popups-to-escape-sandbox' => false,
            'allow-presentation' => false,
            'allow-same-origin' => false,
            'allow-scripts' => false,
            'allow-storage-access-by-user-activation' => false,
            'allow-top-navigation' => false,
            'allow-top-navigation-by-user-activation' => false,
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/script-src
        'script-src' => [
            'none' => false,
            'self' => true,
            'report-sample' => false,
            'allow' => [
                'localhost:3000'
            ],
            'unsafe-inline' => true,
            'unsafe-eval' => true,
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/script-src-attr
        'script-src-attr' => [
            //
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/script-src-elem
        'script-src-elem' => [
            //
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/style-src
        'style-src' => [
            'self' => true,
            'unsafe-inline' => true,
            'allow' => [
                'localhost:3000',
                '*.typekit.net',
                'fonts.googleapis.com'
            ]
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/style-src-attr
        'style-src-attr' => [
            //
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/style-src-elem
        'style-src-elem' => [
            //
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/trusted-types
        'trusted-types' => [
            'enable' => false,
            'allow-duplicates' => false,
            'default' => false,
            'policies' => [
                //
            ],
        ],

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/worker-src
        'worker-src' => [
            //
        ],
    ],
];
