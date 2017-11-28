<?php

use yii\db\Migration;

/**
 * Class m171128_214231_contacts
 */
class m171128_214231_contacts extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%contacts}}', [
            'id' => $this->primaryKey(11),
            'email' => $this->string(30)->notNull(),
            'phone' => $this->string(30)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171128_214231_contacts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171128_214231_contacts cannot be reverted.\n";

        return false;
    }
    */
}
