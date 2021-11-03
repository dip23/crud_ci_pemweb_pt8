<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Customer_model;

class Customers extends Controller{
  public function index()
  {
    $model = new Customer_model();
    $data['customer'] = $model->getCustomer();
    echo view('customer_view', $data);
  }

  public function add_new()
  {
    echo view('add_customer_view');
  }

  public function save()
  {
    $model = new Customer_model();
    $data = array(
      'customer_firstname' => $this->request->getPost('customer_firstname'),
      'customer_lastname' => $this->request->getPost('customer_lastname'),
    );
    $model->saveCustomer($data);
    return redirect()->to('/customer');
  }

  public function edit($id)
  {
    $model = new Customer_model();
    $data['customer'] = $model->getCustomer($id)->getRow();
    echo view('edit_customer_view', $data);
  }

  public function update()
  {
    $model = new Customer_model();
    $id = $this->request->getPost('customer_id');
    $data = array(
      'customer_firstname' => $this->request->getPost('customer_firstname'),
      'customer_lastname' => $this->request->getPost('customer_lastname'),
    );
    $model->updateCustomer($data, $id);
    return redirect()->to('/customer');
  }

  public function delete($id)
  {
    $model = new Customer_model();
    $model->deleteCustomer($id);
    return redirect()->to('/customer');
  }
}