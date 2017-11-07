<?php

use yii\db\Migration;

/**
 * Class m171107_114152_profile
 */
class m171107_114152_profile extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
         $this->createTable('{{%profile}}', [
            'id' => $this->primaryKey(11),
            'name' => $this->string(255)->notNull(), 
            'age' => $this->integer(11)->notNull(),
            'country' => $this->string(255)->notNull(),
            'about_myself' => $this->string(255)->notNull(),
            'contacts' => $this->string(255)->notNull(),
            'date' => $this->dateTime(),
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171107_114152_profile cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171107_114152_profile cannot be reverted.\n";

        return false;
    }
    */
}
