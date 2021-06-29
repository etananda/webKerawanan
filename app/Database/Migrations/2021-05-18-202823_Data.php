<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Data extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'id_master_data' => [
				'type' => 'INT',
				'constraint' => 100,
				'unsigned' => true,
			],
			'jumlah_desa' => [
				'type' => 'VARCHAR',
				'constraint' => 3,
			],
			'kecamatan' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'nilai' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => true,
			]
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('data');
	}

	public function down()
	{
		$this->forge->dropTable('data');
	}
}
