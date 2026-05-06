<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\StudentModel;

class StudentApi extends ResourceController
{
    protected $modelName = StudentModel::class;
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        $student = $this->model->find($id);
        if (!$student) {
            return $this->failNotFound('Student not found');
        }

        return $this->respond($student);
    }

    public function create()
    {
        $data = $this->request->getJSON(true) ?? $this->request->getPost();
        if (empty($data)) {
            return $this->failValidationErrors('No input data provided');
        }

        if (!$this->model->insert($data)) {
            return $this->failValidationErrors($this->model->errors());
        }

        return $this->respondCreated([
            'status'  => 201,
            'message' => 'Student created',
            'data'    => $this->model->find($this->model->getInsertID()),
        ]);
    }

    public function update($id = null)
    {
        $data = $this->request->getJSON(true) ?? $this->request->getRawInput();
        if (empty($data)) {
            return $this->failValidationErrors('No input data provided');
        }

        $student = $this->model->find($id);
        if (!$student) {
            return $this->failNotFound('Student not found');
        }

        if (!$this->model->update($id, $data)) {
            return $this->failValidationErrors($this->model->errors());
        }

        return $this->respond([
            'status'  => 200,
            'message' => 'Student updated',
            'data'    => $this->model->find($id),
        ]);
    }

    public function delete($id = null)
    {
        $student = $this->model->find($id);
        if (!$student) {
            return $this->failNotFound('Student not found');
        }

        $this->model->delete($id);

        return $this->respondDeleted([
            'status'  => 200,
            'message' => 'Student deleted',
        ]);
    }
}