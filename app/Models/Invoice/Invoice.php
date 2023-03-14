<?php

namespace App\Models\Invoice;

use CodeIgniter\Model;

class Invoice extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'invoices';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $insertID         = 0;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = ['from', 'billto', 'invoice_number', 'invoice_date', 'status', 'note', 'total_invoice', 'prosentase_invoice'];

  // Dates
  protected $useTimestamps = false;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  // Validation
  protected $validationRules      = [];
  protected $validationMessages   = [];
  protected $skipValidation       = false;
  protected $cleanValidationRules = true;

  // Callbacks
  protected $allowCallbacks = true;
  protected $beforeInsert   = [];
  protected $afterInsert    = [];
  protected $beforeUpdate   = [];
  protected $afterUpdate    = [];
  protected $beforeFind     = [];
  protected $afterFind      = [];
  protected $beforeDelete   = [];
  protected $afterDelete    = [];

  public function getInvoices($invoice_id = null)
  {
    if ($invoice_id == null) {
      $sql = "SELECT * FROM invoices i2 order by created_at DESC";
      $query = $this->db->query($sql);
      return  $query->getResultArray();
    } else {
      $sql = "SELECT * FROM invoices i WHERE i.id = '$invoice_id'";
      $query = $this->db->query($sql);
      return  $query->getFirstRow('array');
    }
  }

  public function saveInvoice(array $invoice, array $invoice_detail): bool
  {
    $this->db->transStart();
    $this->db->table('invoices')->insert($invoice);
    $this->db->table('invoice_details')->insertBatch($invoice_detail);
    $this->db->transComplete();

    if ($this->db->transStatus() === FALSE) {
      $this->db->transRollback();
    } else {
      $this->db->transCommit();
    }

    return ($this->db->transStatus() === false) ? false : true;
  }

  public function getLastInvoiceNumber()
  {
    $sql = "SELECT * FROM invoices order by id desc";
    $query = $this->db->query($sql);
    $last_inv = $query->getFirstRow();

    return (is_null($query->getFirstRow())) ? 0 : $last_inv->invoice_number;
  }

  public function updateInvoice($id, $data)
  {
    return $this->db->table('invoices')
      ->where('id', $id)
      ->update($data);
  }

  public function deleteInvoice($invoice_id)
  {
    $this->db->transStart();
    $this->db->query("DELETE FROM invoice_details WHERE invoice_number = '$invoice_id'");
    $this->db->query("DELETE FROM invoices WHERE invoice_number = '$invoice_id'");
    // $this->db->table('invoice_details')->delete(['invoice_id' => $invoice_id]);
    // $this->db->table('invoices')->delete(['invoice' => $invoice_id]);
    $this->db->transComplete();

    if ($this->db->transStatus() === FALSE) {
      $this->db->transRollback();
    } else {
      $this->db->transCommit();
    }

    return ($this->db->transStatus() === false) ? false : true;

    // return $this->db->table('invoices')
    //   ->where('id', $invoice_id)
    //   ->delete();
  }
}
