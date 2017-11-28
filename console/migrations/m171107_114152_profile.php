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
            'title' => $this->string(255),
            'h1' => $this->string(255),
            'h2' => $this->string(255),
            'most_wanted' => $this->string(255),
            'img_mw' => $this->string(255),
            'phone' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'nationality' => $this->string(255)->notNull(), 
            'age' => $this->integer(11)->notNull(),
            'height' => $this->string(255)->notNull(),
            'mesurements' => $this->string(255)->notNull(),
            'weight' => $this->string(255)->notNull(),
            'about_myself' => $this->string(255)->notNull(),
            'about_myself_link' => $this->string(255),
            'status' => $this->integer(11),
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
