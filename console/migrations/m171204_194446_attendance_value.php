<?php

use yii\db\Migration;

/**
 * Class m171204_194446_attendance_value
 */
class m171204_194446_attendance_value extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%attendance_value}}', [
            'id' => $this->primaryKey(11),
            'attendance_id' => $this->integer(11)->notNull(),
            'profile_id' => $this->integer(11)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171204_194446_attendance_value cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171204_194446_attendance_value cannot be reverted.\n";

        return false;
    }
    */
}
