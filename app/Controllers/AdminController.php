<?php

namespace App\Controllers;

use App\Models\EducationModel;
use App\Models\SkillModel;
use App\Models\ExperienceModel;

class AdminController extends BaseController
{

    public function index()
    {

        // Checks if logged in. if not, redirect
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }


        $skillModel = new \App\Models\SkillModel();
        $eduModel = new \App\Models\EducationModel(); // 1. Load the new model
        $expModel = new \App\Models\ExperienceModel();

        $data = [
            'skills'    => $skillModel->findAll(),
            'education' => $eduModel->findAll(),     // 2. Fetch the education data
            'experience' => $expModel->findAll(),
            'title'     => 'Admin Dashboard'
        ];

        return view('admin/index', $data);
    }

    public function editSkill($id)
    {
        $model = new SkillModel();
        $data['skill'] = $model->find($id);
        return view('admin/edit_skill', $data);
    }

    public function updateSkill($id)
    {
        $model = new SkillModel();

        // Take the data from the Bulma form
        $newData = [
            'name' => $this->request->getPost('name'),
            'level'  => $this->request->getPost('level'),
            'desc'   => $this->request->getPost('desc'),
        ];

        $model->update($id, $newData);
        return redirect()->to(base_url('/resume'))->with('status', 'Skill Updated!');
    }




    public function editEducation($id)
    {
        $model = new EducationModel();
        $data['education'] = $model->find($id);
        return view('admin/edit_education', $data);
    }

    public function updateEducation($id)
    {
        $model = new EducationModel();

        // Take the data from the Bulma form
        $newData = [
            'school' => $this->request->getPost('school'), // name matches Model
            'level'  => $this->request->getPost('level'),
            'year'   => $this->request->getPost('year'),
        ];

        $model->update($id, $newData);
        return redirect()->to(base_url('/resume'))->with('status', 'Education Updated!');
    }



    public function editExperience($id)
    {
        $model = new ExperienceModel();
        $data['experience'] = $model->find($id);
        return view('admin/edit_experience', $data);
    }

    public function updateExperience($id)
    {
        $model = new ExperienceModel();

        // Take the data from the Bulma form
        $newData = [
            'year' => $this->request->getPost('year'), // name matches Model
            'company'  => $this->request->getPost('company'),
            'desc'   => $this->request->getPost('desc'),
            // 'status'   => $this->request->getPost('status'),
        ];

        $model->update($id, $newData);
        return redirect()->to(base_url('/resume'))->with('status', 'Experience Updated!');
    }







    public function updateAccount()
    {
        $model = new \App\Models\UserModel();
        $userId = session()->get('user_id'); // Get your ID from the session

        $data = [
            'name'  => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ];

        // Password Check Logic
        $newPassword = $this->request->getPost('password');
        if (!empty($newPassword)) {
            // HASH THE PASSWORD! Never save plain text.
            $data['password'] = password_hash($newPassword, PASSWORD_DEFAULT);
        }

        if ($model->update($userId, $data)) {
            return redirect()->to('/admin')->with('msg', 'Account updated!');
        }
    }






    public function addSkill()
    {
        $model = new SkillModel();
        $model->save([
            'name' => $this->request->getPost('skill_name')
        ]);
        return redirect()->to(base_url('/admin'))->with('status', 'Skill added!');
    }

    public function deleteSkill($id)
    {
        $model = new SkillModel();
        $model->delete($id); // This now Soft Deletes because of the Model setting!
        return redirect()->to(base_url('/admin'))->with('status', 'Skill removed!');
    }
}
