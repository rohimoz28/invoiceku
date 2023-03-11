<?php

namespace App\Models\Invoice;

use CodeIgniter\Model;

class InvoiceDetail extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'invoice_details';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $insertID         = 0;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = ['invoice_id', 'description',  'detail_date', 'flight', 'route', 'booking', 'qty', 'price', 'total_details'];

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

  public function getInvoiceDetail($invoice_id = null)
  {
    $sql = "SELECT * FROM invoice_details d WHERE d.invoice_id = '$invoice_id'";
    $query = $this->db->query($sql);
    return $query->getResultArray();
  }
}
