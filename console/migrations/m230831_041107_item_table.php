<?php

use yii\db\Migration;

/**
 * Class m230831_041107_item_table
 */
class m230831_041107_item_table extends Migration
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
        echo "m230831_041107_item_table cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('item', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'price' => $this->integer(11),
            'category_id' => $this->integer(11),
        ]);
    }

    public function down()
    {
        echo "m230831_041107_item_table cannot be reverted.\n";

        return false;
    }
    
}
