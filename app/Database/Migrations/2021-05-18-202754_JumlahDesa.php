<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JumlahDesa extends Migration
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
			'jumlah_desa' => [
				'type' => 'VARCHAR',
				'constraint' => 3,
			],
			'kecamatan' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			]
		]);

		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('id_master_data', 'master_data', 'field_id');
		$this->forge->createTable('jumlah_desa');
	}

	public function down()
	{
		$this->forge->dropTable('jumlah_desa');
	}
}
