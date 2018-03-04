<?php

use yii\db\Migration;

/**
 * Class m180304_103448_seo
 */
class m180304_103448_seo extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%seo}}', [
            'id' => $this->primaryKey(11),
            'google' => $this->string(255)->notNull(),
            'robots' => $this->string(1000)->notNull(),
            'yandex' => $this->string(255)->notNull(),      
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180304_103448_seo cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180304_103448_seo cannot be reverted.\n";

        return false;
    }
    */
}
