<?php

use yii\db\Migration;

/**
 * Class m171204_193949_attendance
 */
class m171204_193949_attendance extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%attendance}}', [
            'id' => $this->primaryKey(11),
            'name' => $this->string(50)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171204_193949_attendance cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171204_193949_attendance cannot be reverted.\n";

        return false;
    }
    */
}
