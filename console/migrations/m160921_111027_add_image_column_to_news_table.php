<?php

use yii\db\Migration;

/**
 * Handles adding image to table `news`.
 */
class m160921_111027_add_image_column_to_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('news', 'image', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('news', 'image');
    }
}
