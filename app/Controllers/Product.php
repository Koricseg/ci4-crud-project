<?php

namespace App\Controllers;

use App\Models\ProductModel;

/**
 * @property \CodeIgniter\HTTP\IncomingRequest $request
 */
class Product extends BaseController
{
    public function index()
    {
        $model = new ProductModel();

        // get search query
        $search = $this->request->getGet('search');

        // IMPORTANT: keep query string for pagination links
        $model = $model->orderBy('id', 'DESC');

        if (!empty($search)) {
            $model = $model->like('name', $search);
        }

        // paginate ALWAYS called once (clean pattern)
        $products = $model->paginate(5);

        // ALWAYS pass pager (kahit walang data)
        $data = [
            'products' => $products ?? [],
            'pager'    => $model->pager,
            'search'   => $search
        ];

        return view('products/index', $data);
    }

    public function create()
    {
        return view('products/create');
    }

    public function store()
{
    $model = new ProductModel();

    $model->save([
        'name' => $this->request->getPost('name'),
        'price' => $this->request->getPost('price'),
        'quantity' => $this->request->getPost('quantity'), 
        'description' => $this->request->getPost('description'),
    ]);

    return redirect()->to('/products');
}

    public function edit(int $id)
    {
        $model = new ProductModel();
        $data['product'] = $model->find($id);

        return view('products/edit', $data);
    }

    public function update(int $id)
    {
        $model = new ProductModel();

        $model->update($id, [
            'name' => $this->request->getPost('name'),
        'price' => $this->request->getPost('price'),
        'quantity' => $this->request->getPost('quantity'), 
        'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/products');
    }

    public function delete(int $id)
    {
        $model = new ProductModel();
        $model->delete($id);

        return redirect()->to('/products');
    }
}