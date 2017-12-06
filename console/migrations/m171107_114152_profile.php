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
            'H1' => $this->string(255),
            'H2' => $this->string(255),
            'name_description' => $this->string(255),
            'description' => $this->string(500),
            'most_wanted' => $this->string(1000),
            'text1000' => $this->string(2000),
            'img_mw' => $this->string(255),
            'phone' => $this->string(255),
            'email' => $this->string(255),
            'nationality' => $this->string(255)->notNull(), 
            'age' => $this->integer(11)->notNull(),
            'height' => $this->string(255)->notNull(),
            'mesurements' => $this->string(255)->notNull(),
            'weight' => $this->string(255)->notNull(),
            'chest' => $this->integer(11)->notNull(),
            'hair' => $this->string(255)->notNull(),
            'eye' => $this->string(255)->notNull(),
            'language' => $this->string(255)->notNull(),
            'country' => $this->string(255)->notNull(),
            'city' => $this->string(255)->notNull(),
            'working_hours' => $this->string(255)->notNull(),
            'about_myself' => $this->string(1000)->notNull(),
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
