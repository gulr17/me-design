<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",
    
    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/base.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/modules.min.css"
            ]
        ],

        "pre-default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/default.min.css"
            ]
        ],

        "separator01" => "------------------------------------------------",
        
        "vgrid"      => [
            "title"      => "Vertikalt grid",
            "class"      => "",
            "stylesheets" => [
                "css/vgrid.min.css"
            ]
        ],
        
        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => [
                "css/light.min.css"
            ]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => [
                "css/color.min.css"
            ]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => [
                "css/dark.min.css"
            ]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => [
                "css/colorful.min.css"
            ]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => [
                "css/typography.min.css",
                "https://fonts.googleapis.com/css?family=Pacifico"
            ]
        ],

        "separator2" => "------------------------------------------------",

        "fun"       => [
            "title"      => "All fun, test and play, make it stand out!",
            "class"      => "fun",
            "stylesheets" => []
        ],

        "separator3" => "------------------------------------------------",
        
        "design-1"       => [
            "title"      => "Design element 1",
            "class"      => "de1",
            "stylesheets" => [
                "css/design1.min.css"
            ]
        ],
        "design-2"       => [
            "title"      => "Design element 2",
            "class"      => "de2",
            "stylesheets" => [
                "css/design2.min.css"
            ]
        ],
        "design-3"       => [
            "title"      => "Design element 3",
            "class"      => "de3",
            "stylesheets" => [
                "css/design3.min.css"
            ]
        ],

        "separator4" => "------------------------------------------------",

        "design-princip-1"       => [
            "title"      => "Design principle 1",
            "class"      => "dp1",
            "stylesheets" => [
                "css/design-p1.min.css"
            ]
        ],
        "design-princip-2"       => [
            "title"      => "Design principle 2",
            "class"      => "dp2",
            "stylesheets" => [
                "css/design-p2.min.css"
            ]
        ]
    ]
];
