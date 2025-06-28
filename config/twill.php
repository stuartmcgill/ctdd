<?php

declare(strict_types=1);

return [
    'block_editor' => [
        'use_twill_blocks' => [],
        'crops' => [
            'highlight' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 1,
                    ],
                ],
            ],
        ],
    ],
    'media_library' => [
        'disk' => 'twill_media_library',
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH', 'uploads'),
        'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE', 'A17\Twill\Services\MediaLibrary\Glide'),
        'acl' => env('MEDIA_LIBRARY_ACL', 'private'),
        'filesize_limit' => env('MEDIA_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => ['svg', 'jpg', 'gif', 'png', 'jpeg'],
        'init_alt_text_from_filename' => true,
        'prefix_uuid_with_local_path' => config('twill.file_library.prefix_uuid_with_local_path', false),
        'translated_form_fields' => false,
        'show_file_name' => false,
        'media_caption_use_wysiwyg' => false,
        'media_caption_wysiwyg_options' => [
            'modules' => [
                'toolbar' => [
                    'bold',
                    'italic',
                ],
            ],
        ],
    ],
    'dashboard' => [
        'modules' => [
            'App\Models\Church' => [ // module name if you added a morph map entry for it, otherwise FQN of the model (eg. App\Models\Project)
                'name' => 'churches', // module name
                'count' => true, // show total count with link to index of this module
                'create' => true, // show link in create new dropdown
                'activity' => true, // show activities on this module in activities list
                'draft' => true, // show drafts of this module for current user
                'search' => true, // show results for this module in global search
            ],
            'App\Models\Page' => [ // module name if you added a morph map entry for it, otherwise FQN of the model (eg. App\Models\Project)
                'name' => 'pages', // module name
                'count' => true, // show total count with link to index of this module
                'create' => true, // show link in create new dropdown
                'activity' => true, // show activities on this module in activities list
                'draft' => true, // show drafts of this module for current user
                'search' => true, // show results for this module in global search
            ],
            'App\Models\Article' => [ // module name if you added a morph map entry for it, otherwise FQN of the model (eg. App\Models\Project)
                'name' => 'articles', // module name
                'label' => 'News items',
                'count' => true, // show total count with link to index of this module
                'create' => true, // show link in create new dropdown
                'activity' => true, // show activities on this module in activities list
                'draft' => true, // show drafts of this module for current user
                'search' => true, // show results for this module in global search
            ],
        ],
    ],
];
