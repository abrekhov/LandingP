<?php

use yii\db\Migration;

/**
 * Handles the creation of table `main`.
 */
class m170420_195604_create_main_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('main', [
            'id' => $this->primaryKey(),
            'name' => $this->string(200)->notNull(),
            'menu_num' => $this->integer(2),
            'full_name' => $this->string(200)->notNull(),
            'iconurl' => $this->string(200),
            'header_desc' => $this->text(),
            'created_at' => $this->integer(9),
            'updated_at' => $this->integer(9),
        ],'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('main');
    }
}
