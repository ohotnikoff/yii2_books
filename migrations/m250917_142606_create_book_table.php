<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book}}`.
 */
class m250917_142606_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'year' => $this->integer()->null(),
            'description' => $this->string(255)->null(),
            'isbn' => $this->string(255)->null(),
            'image' => $this->string(128)->null(),
            'user_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book}}');
    }
}
