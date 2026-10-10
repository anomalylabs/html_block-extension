<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionHtmlBlockSetHtmlFieldToHtmlMode
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 */
class AnomalyExtensionHtmlBlockSetHtmlFieldToHtmlMode extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!$field = $this->fields()->findBySlugAndNamespace('html', 'html_block')) {
            return;
        }

        $config = $field->getConfig();

        if (array_get($config, 'mode') == 'html') {
            return;
        }

        $config['mode'] = 'html';

        $this->fields()->save($field->setAttribute('config', $config));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (!$field = $this->fields()->findBySlugAndNamespace('html', 'html_block')) {
            return;
        }

        $config = $field->getConfig();

        unset($config['mode']);

        $this->fields()->save($field->setAttribute('config', $config));
    }
}
