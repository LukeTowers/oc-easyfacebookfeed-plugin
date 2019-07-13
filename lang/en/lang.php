<?php return [
    'plugin' => [
        'name'        => 'Easy Facebook Feed',
        'description' => 'Easily display a feed of posts from a Facebook page',
    ],
    'models' => [
        'feed' => [
            'label'            => 'Feed',
            'label_plural'     => 'Feeds',
            'name'             => 'Name',
            'code'             => 'Code',
            'code_description' => 'Used to refer to this field in the facebook:sync console command and in the API',
            'credentials'      => 'Credentials',
            'page_id'          => 'Facebook Page ID',
            'access_token'     => 'Facebook Page Access Token',
            'app_id'           => 'Facebook App ID',
            'app_secret'       => 'Facebook App Secret',
            'temporary_token'  => 'Short-Lived Access Token',
            'long_token'       => 'Long-Lived Access Token',
            'user_id'          => 'User ID',
        ],
        'feed_item' => [
            'label'                 => 'Item',
            'label_plural'          => 'Items',
            'type'                  => 'Type',
            'photo'                 => 'Preview',
            'contents'              => 'Message',
            'created_at'            => 'Posted at',
            'is_pinned'             => 'Pinned',
            'is_pinned_description' => 'Pinning this to the feed prevents it from being bumped by newer posts',
            'is_hidden'             => 'Hidden',
            'is_hidden_description' => 'Hiding this prevents it from showing up in the feed',
            'url'                   => 'URL',
            'fb_item_id'            => 'Facebook ID',
            'no_image'              => 'No image',
            'photo_alt'             => 'Facebook post image',
        ]
    ],
    'permissions' => [
        'manage_plugin' => 'Manage plugin',
    ],
    'controllers' => [
        'feeds' => [
            'new'            => 'New Feed',
            'create'         => 'Create Feed',
            'edit'           => 'Edit Feed',
            'preview'        => 'Preview Feed',
            'sync'           => 'Sync',
            'syncing'        => 'Syncing',
            'category'       => 'Facebook',
            'description'    => 'Manage available FB page feeds.',
            'pin'            => 'Pin',
            'pin_confirm'    => 'Are you sure you want to pin the selected items?',
            'unpin'          => 'Unpin',
            'unpin_confirm'  => 'Are you sure you want to unpin the selected items?',
            'hide'           => 'Hide',
            'hide_confirm'   => 'Are you sure you want to hide the selected items?',
            'unhide'         => 'Unhide',
            'unhide_confirm' => 'Are you sure you want to unhide the selected items?',
        ],
    ],
    'components' => [
        'feed' => [
            'name'        => 'Facebook Feed',
            'description' => 'Displays a feed of posts from a Facebook page',
            'properties'  => [
                'feed' => [
                    'title'             => 'Feed',
                    'validationMessage' => 'You must select a feed to be displayed',
                ],
                'limit' => [
                    'title'             => 'Maximum posts to display',
                    'validationMessage' => 'Must be a number',
                ],
                'types' => [
                    'title'             => 'Types of posts to display',
                    'value'             => [
                        'album'        => 'Photo albums',
                        'event'        => 'Events',
                        'map'          => 'Shared location posts',
                        'multi_share'  => 'Shared posts',
                        'photo'        => 'Photos',
                        'share'        => 'Links',
                        'status'       => 'Posts',
                        'video_inline' => 'Videos',
                    ],
                ],
                'order' => [
                    'title'             => 'Feed order',
                    'value'             => [
                        'desc'   => 'Newest first',
                        'asc'    => 'Oldest first',
                        'random' => 'Random',
                    ],
                ],
            ]
        ],
    ],
];