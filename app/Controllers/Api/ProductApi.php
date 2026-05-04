<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class ProductApi extends ResourceController
{
    protected $modelName = 'App\Models\ProductModel';
    protected $format = 'json';

    // GET /api/products
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // GET /api/products/{id}
    public function show($id = null)
    {
        $data = $this->model->find($id);

        if (!$data) {
            return $this->failNotFound('Product not found');
        }

        return $this->respond($data);
    }
}