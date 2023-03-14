<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableInvoice extends Migration
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
      'from' => [
        'type' => 'text',
      ],
      'billto' => [
        'type' => 'text',
      ],
      'invoice_date' => [
        'type' => 'datetime',
      ],
      'invoice_number' => [
        'type' => 'varchar',
        'constraint' => 100,
      ],
      'total_invoice' => [
        'type' => 'decimal',
        'constraint' => '19,2',
      ],
      'prosentase_service' => [
        'type' => 'decimal',
        'constraint' => '19,2',
      ],
      'status' => [
        'type' => 'varchar',
        'constraint' => 100,
        'default' => 'NOT PAID',
        'null' => false
      ],
      'payment' => [
        'type' => 'varchar',
        'constraint' => 100,
        'null' => true
      ],
      'tax' => [
        'type' => 'decimal',
        'constraint' => '19,2',
      ],
      'service' => [
        'type' => 'decimal',
        'constraint' => '19,2',
      ],
      'note' => [
        'type' => 'text',
      ],
      'created_at datetime default current_timestamp',
    ]);

    $this->forge->addKey('id', TRUE);

    $this->forge->createTable('invoices', TRUE);
  }

  public function down()
  {
    $this->forge->dropTable('invoices');
  }
}
