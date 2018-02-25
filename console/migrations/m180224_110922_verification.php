<?php

use yii\db\Migration;

/**
 * Class m180224_110922_verification
 */
class m180224_110922_verification extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%verification}}', [
            'id' => $this->primaryKey(11),
            'textup' => $this->string(1000)->notNull(),
            'textdown' => $this->string(1000)->notNull(),
            'enter' => $this->string(255)->notNull(),
            'leave' => $this->string(255)->notNull(),
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180224_110922_verification cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180224_110922_verification cannot be reverted.\n";

        return false;
    }
    */
}
