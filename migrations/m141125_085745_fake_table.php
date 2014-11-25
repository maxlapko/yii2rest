<?php

use yii\db\Schema;
use yii\db\Migration;

class m141125_085745_fake_table extends Migration
{
    public function up()
    {   
        // fake table
        $this->createTable('fakes', 
            [
                'id'   => Schema::TYPE_PK,
                'name' => Schema::TYPE_STRING . ' NOT NULL',
                'email' => Schema::TYPE_STRING,
                'phone' => Schema::TYPE_STRING,
                'created_at' => Schema::TYPE_DATETIME,
                'updated_at' => Schema::TYPE_DATETIME
            ]
        );
    }

    public function down()
    {
        $this->dropTable('fakes');
    }
}
