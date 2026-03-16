<?php


namespace App\Controllers;

class Admin extends BaseController
{

public $userIdGlobal = 1;
    
public function account()
{
    $model = new \App\Models\UserModel();
    
    // We assume you stored the logged-in user's ID in the session during login
    $userId = 1;   //session()->get('user_id'); 
    
    $data['user'] = $model->find($userId);

    return view('admin/account', $data);
}

public function updateAccount()
{
    $model = new \App\Models\UserModel();
    $userId = 1;  //session()->get('user_id');

    // Collect data from the form
    $data = [
        'username'  => $this->request->getPost('username'),
        'first_name'  => $this->request->getPost('first_name'),
        'last_name'  => $this->request->getPost('last_name'),
        'middle_name'  => $this->request->getPost('middle_name'),
        'email_address'  => $this->request->getPost('email_address'),
        'birthdate'  => $this->request->getPost('birthdate'),
        'address' => $this->request->getPost('address'),
    ];

    // Only hash and update password if the user actually typed something
    $password = $this->request->getPost('password');
    if (!empty($password)) {
        $data['password'] = password_hash($password, PASSWORD_DEFAULT);
    }

    $model->update($userId, $data);

    return redirect()->to(base_url('resume'))->with('status', 'Profile Updated!');
}

}