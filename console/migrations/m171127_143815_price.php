<?php

use yii\db\Migration;

/**
 * Class m171127_143815_price
 */
class m171127_143815_price extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%price}}', [
            'id' => $this->primaryKey(11),
            'name' => $this->string(20)->notNull(),
            'incall' => $this->integer(11)->notNull(),
            'outcall' => $this->integer(11)->notNull(),
            'currency' => $this->integer(11)->notNull(),
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171127_143815_price cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171127_143815_price cannot be reverted.\n";

        return false;
    }
    */
}
