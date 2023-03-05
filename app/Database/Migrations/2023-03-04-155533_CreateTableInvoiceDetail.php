<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableInvoiceDetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'invoice_id' => [
                'type' => 'int',
                'constraint' => 11,
            ],
            'description' => [
                'type' => 'text',
            ],
            'detail_date' => [
                'type' => 'datetime',
            ],
            'flight' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'booking' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'qty' => [
                'type' => 'int',
                'constraint' => 11,
            ],
            'price' => [
                'type' => 'decimal',
                'constraint' => '19,2',
            ],
            'total_details' => [
                'type' => 'decimal',
                'constraint' => '19,2',
            ],
            'created_at datetime default current_timestamp',
        ]);

        $this->forge->addKey('id', TRUE);

        $this->forge->createTable('invoice_details', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('invoice_details');
    }
}
