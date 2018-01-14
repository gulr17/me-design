<?php
/**
 * Config-file for Anax, theme related settings, return it all as array.
 *
 */
return [

    /**
     * Base view to start render page from.
     */
    "view" => [
        "template" => "default/index",

        "data" => [
            // General
            "htmlClass"     => ["anax-flat"],
            "bodyClass"     => [],
            "lang"          => "sv",
            "charset"       => "utf-8",
            "title_append"  => " | Bew Gorp Corp",
            "favicon"       => "img/favicon/favicon_256x256.png",

            // Style and stylesheets
            "stylesheets" => [
                "css/style.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
                ],
            "styleInline" => null,

            // JavaScript
            "javascripts" => ["js/responsive-menu.js"],
        ],
    ],



    /**
     * Add default views to always include.
     */
    "views" => [

        [
            "region" => "header",
            "template" => "default/header",
            "data" => [
                "homeLink"      => "",
                "siteLogoText"  => "",
                "siteLogoTextIcon" => "img/favicon/favicon_40x40.png",
                "siteLogoTextIconAlt" => "Small logo",
                "siteLogo"      => "img/bew.png",
                "siteLogoAlt"   => "Anax Logo",
                "siteTitle"     => "Anax PHP framework",
                "siteSlogan"    => "Reusable modules for web development",
            ],
            "sort" => 1
        ],

        [
            "region" => "profile",
            "template" => "default/navbar-max",
            "data" => [],
            "sort" => -1
        ],
        [
            "region" => "navbar2",
            "template" => "default/navbar",
            "data" => [],
            "sort" => 1
        ],
        [
            "region" => "flash",
            "template" => "default/image",
            "data" => [
                "class"     => "background-flash",
                "src"       => "img/mountains.jpg",
                "siteTitle" => "Bew Gorp Web Design",
                "textClass" => "site-logo-text"
            ],
            "sort" => 1
        ],
        [
            "region" => "footer",
            "template" => "default/columns",
            "data" => [
                "class"  => "footer-column",
                "columns" => [
                    [
                        "contentRoute" => "block/footer-col-1",
                    ],
                    [
                        "contentRoute" => "block/footer-col-2",
                    ],
                    [
                        "contentRoute" => "block/footer-col-3",
                    ]
                ]
            ],
            "sort" => 1
        ],
        [
            "region" => "footer",
            "template" => "default/block",
            "data" => [
                "class" => "site-footer",
                "contentRoute" => "block/footer",
            ],
            "sort" => 2
        ],
    ],
];
