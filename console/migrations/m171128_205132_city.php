<?php

use yii\db\Migration;

/**
 * Class m171128_205132_city
 */
class m171128_205132_city extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%city}}', [
            'id' => $this->primaryKey(11),
            'name' => $this->string(255)->notNull(),
            'href' => $this->string(255)->notNull(),
            ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171128_205132_city cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171128_205132_city cannot be reverted.\n";

        return false;
    }
    */
}
