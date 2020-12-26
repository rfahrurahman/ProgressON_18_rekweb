<?php

namespace App\Database\Migrations;


class Transaksi extends \CodeIgniter\Database\Migration
{

    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_barang'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_pembeli'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'jumlah'       => [
                'type'           => 'TEXT',
            ],
            'total_harga' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'created_by' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'created_date' => [
                'type'           => 'DATETIME',
            ],
            'updated_by' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null'           => true,
            ],
            'updated_date' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'alamat' => [
                'type' => 'TEXT'
            ],
            'ongkir' => [
                'type' => 'INT'
            ],
            'status' => [
                'type' => 'INT',
                'constraint' => 1,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->db->enableForeignKeyChecks('id_pembeli', 'user', 'id');
        $this->db->enableForeignKeyChecks('id_barang', 'barang', 'id');
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi');
    }
}
