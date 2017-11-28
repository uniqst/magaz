<?php

use yii\db\Migration;

/**
 * Class m171127_143815_price
 */
class m171127_143815_price extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%price}}', [
            'id' => $this->primaryKey(11),
            'price_eur_one' => $this->integer(11),
            'price_try_one' => $this->integer(11),
            'price_usd_one' => $this->integer(11),
            'price_eur_two' => $this->integer(11),
            'price_try_two' => $this->integer(11),
            'price_usd_two' => $this->integer(11),
            'price_eur_three' => $this->integer(11),
            'price_try_three' => $this->integer(11),
             'price_usd_three' => $this->integer(11),
             'price_eur_four' => $this->integer(11),
             'price_try_four' => $this->integer(11),
             'price_usd_four' => $this->integer(11),
             'price_eur_night' => $this->integer(11),
             'price_try_night' => $this->integer(11),
             'price_usd_night' => $this->integer(11),
             'price_eur_one' => $this->integer(11),
             'price_eur_one' => $this->integer(11),
             'price_eur_one' => $this->integer(11),
             'taxi_eur' => $this->integer(11),
             'taxi_try' => $this->integer(11),
             'taxi_usd' => $this->integer(11),
             'email' => $this->string(255)->notNull(),
            'phone' => $this->string(255)->notNull(),
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171127_143815_price cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171127_143815_price cannot be reverted.\n";

        return false;
    }
    */
}
