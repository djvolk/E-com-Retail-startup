<?php

use yii\db\Migration;
use yii\db\Schema;

class m160608_125525_todolist extends Migration {

    public function up() {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql')
        {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%todolist}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING.' NOT NULL',
            'updated_at' => Schema::TYPE_TIMESTAMP.' NOT NULL',
            'created_at' => Schema::TYPE_TIMESTAMP.' NOT NULL',           
                ], $tableOptions);

        $this->createTable('{{%todolistdesc}}', [
            'id' => Schema::TYPE_PK,
            'description' => Schema::TYPE_TEXT.' NOT NULL',
                ], $tableOptions);

        $this->createIndex('idx-post_id-desc_id', '{{%todolistdesc}}', 'id');

        $this->addForeignKey('fk-post_id-desc_id', '{{%todolistdesc}}', 'id', '{{%todolist}}', 'id', 'CASCADE');
    }

    public function down() {

        $this->dropForeignKey('fk-post_id-desc_id', '{{%todolistdesc}}');

        $this->dropTable('{{%todolist}}');
        $this->dropTable('{{%todolistdesc}}');
    }

    /*
      // Use safeUp/safeDown to run migration code within a transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}
