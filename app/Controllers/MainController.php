<?php

namespace App\Controllers;

use App\Models\SkillModel;
use App\Models\ExperienceModel;
use App\Models\EducationModel;

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
        $skillModel = new SkillModel();
        $expModel   = new ExperienceModel();
        $educModel = new EducationModel();

        $data['info'] = [
            'name'       => 'Rylle G. Panganonong', 
            'role'       => 'Developer',
            'email'      => 'panganonongrylle@gmail.com',
            'phone_number' => '09502758504',
            'photo'    => 'profile.jpg',
            'experience' => $expModel->findAll(), // Fetches all rows from MySQL
            'skills'     => $skillModel->findAll(),
            'education'  => $educModel->findAll(),
        ];

        return view('resume_view', $data);
    }
}
