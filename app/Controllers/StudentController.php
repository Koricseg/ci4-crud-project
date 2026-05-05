<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function index()
    {
        $model = new StudentModel();

        // Get the search term from the GET request
        $search = $this->request->getGet('search');

        if (!empty($search)) {
            // Group the LIKE queries to ensure they don't interfere with other WHERE clauses
            $model->groupStart()
                  ->like('name', $search)
                  ->orLike('email', $search)
                  ->orLike('course', $search)
                  ->orLike('year', $search)
                  ->groupEnd();
        }

        $data = [
            'students' => $model->findAll(),
            'search'   => $search
        ];

        return view('students/index', $data);
    }

    public function create()
    {
        return view('students/create');
    }

    public function store()
    {
        $model = new StudentModel();

        $model->save([
            'name'   => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'course' => $this->request->getPost('course'),
            'year'   => $this->request->getPost('year'),
        ]);

        return redirect()->to('/students');
    }

    public function edit($id)
    {
        $model = new StudentModel();
        $student = $model->find($id);

        return view('students/edit', ['student' => $student]);
    }

    public function update($id)
    {
        $model = new StudentModel();

        $model->update($id, [
            'name'   => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'course' => $this->request->getPost('course'),
            'year'   => $this->request->getPost('year'),
        ]);

        return redirect()->to('/students');
    }

    public function delete($id)
    {
        $model = new StudentModel();
        $model->delete($id);

        return redirect()->to('/students');
    }
}