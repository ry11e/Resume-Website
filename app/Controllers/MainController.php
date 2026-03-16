<?php

namespace App\Controllers;

use App\Models\SkillModel;
use App\Models\ExperienceModel;
use App\Models\EducationModel;
use App\Models\UserModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MainController extends BaseController
{

    protected $helpers = ['url'];

    public function index()
    {
        return view('my_homepage');
    }

    public function resume()
    {

        $userModel = new UserModel();
        $skillModel = new SkillModel();
        $expModel   = new ExperienceModel();
        $educModel = new EducationModel();

        $user = $userModel->find(1);
        $mName = $user['middle_name'];
        $mInitial = substr($mName, 0, 1);
        $name = $user['first_name'] . " " . $mInitial . ". " . $user['last_name'];

        $email = $user['email_address'];

        $data['info'] = [
            'name'       => $name, 
            'role'       => 'Developer',
            'email'      => $email,
            'phone_number' => '09502758504',
            'photo'    => 'profile.jpg',
            'experience' => $expModel->findAll(), // Fetches all rows from MySQL
            'skills'     => $skillModel->findAll(),
            'education'  => $educModel->findAll(),
        ];

        return view('resume_view', $data);
    }
}
