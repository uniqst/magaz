<?php

use yii\db\Migration;

/**
 * Class m171113_105335_stories
 */
class m171113_105335_stories extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%stories}}', [
            'id' => $this->primaryKey(11),
            'img' => $this->string(255),
            'title' => $this->string(255),
            'H1' => $this->string(255)->notNull(),
            'description' => $this->string(750),
            'short_description' => $this->string(1000)->notNull(),
            'content' => $this->getDb()->getSchema()->createColumnSchemaBuilder('LONGTEXT')->notNull(),
            'date' => $this->dateTime(),       
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171113_105335_stories cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171113_105335_stories cannot be reverted.\n";

        return false;
    }
    */
}
