<?php
namespace App\Controllers;
use App\Models\SkillModel;

class AdminController extends BaseController {
    
    public function index() {

        // Checks if logged in. if not, redirect
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }


        $model = new SkillModel();
        $data['skills'] = $model->findAll();
        return view('admin/index', $data);
    }

    public function editSkill($id) {
        $model = new SkillModel();
        $data['skill'] = $model->find($id);
        return view('admin/edit_skill', $data);
    }

    public function updateSkill($id) {
        $model = new SkillModel();
        
        // Take the data from the Bulma form
        $newData = [
            'name' => $this->request->getPost('skill_name')
        ];

        $model->update($id, $newData);
        return redirect()->to('/admin')->with('status', 'Skill Updated!');
    }
}
