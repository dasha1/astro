<?php

use yii\db\Migration;

/**
 * Handles adding created_at to table `news`.
 */
class m160926_111053_add_created_at_column_to_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('news', 'created_at', $this->date());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('news', 'created_at');
    }
}
