<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 100,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'username'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'intro' => [
				'type' => 'TEXT',
				'null' => true
			],
			'type' => [
				'type' => 'SET',
				'constraint' => ['Free', 'Premium', 'VIP'],
        		'default' => 'Free',
			]
			]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('user');
    }

    public function down()
    {
        //
        $this->forge->dropTable('user');
        
    }
}
