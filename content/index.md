---
title: Home

views:
    columns1:
        region: columns-above
        template: default/columns
        sort: 1
        data:
            class: col3
            meta:
                type: columns
                columns:
                    column-1:
                        data:
                            meta:
                                type: content
                                route: block/index-col-1
                    column-2:
                        data:
                            meta:
                                type: content
                                route: block/index-col-2
                    column-3:
                        data:
                            meta:
                                type: content
                                route: block/index-col-3
...
