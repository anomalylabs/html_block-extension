<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionHtmlBlockCreateHtmlBlockFields
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionHtmlBlockCreateHtmlBlockFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'html' => [
            'type'   => 'anomaly.field_type.editor',
            'config' => [
                'mode' => 'html',
            ],
        ],
    ];

}
