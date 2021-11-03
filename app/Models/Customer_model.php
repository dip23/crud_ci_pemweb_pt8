<?php
namespace App\Models;
use CodeIgniter\Model;

class Cusomer_model extends Model
{
  protected $table = 'customer';
  public function getCustomer($id = false)
  {
    if($id === false){
      return $this->findAll();
    } else {
      return $this->getWhere(['customer_id' => $id]);
    }
  }
  public function saveCustomer($data)
  {
    $query = $this->db->table($this->table)->insert($data);
    return $query;
  }
  public function updateCustomer($data, $id)
  {
    $query = $this->db->table($this->table)->update($data, array('customer_id' => $id));
    return $query;
  }
  public function deleteCustomer($id)
  {
    $query = $this->db->table($this->table)->delete(array('customer_id' => $id));
    return $query;
  }
}