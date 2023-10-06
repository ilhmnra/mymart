<?php

use yii\db\Migration;

/**
 * Class m230831_041134_item_category
 */
class m230831_041134_item_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230831_041134_item_category cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('item_category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'parent_category' => $this->integer(11),
        ]);
    }

    public function down()
    {
        echo "m230831_041134_item_category cannot be reverted.\n";

        return false;
    }
    
}
