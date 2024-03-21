<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AdminModel;

class LoginController extends BaseController
{
    public function signinPage()
    {
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];
            
            $errors = [
                'password' => [
                    'validateUser' => "Email or Password don't match",
                ],
            ];
            if (!$this->validate($rules, $errors)) {
                return view('admin-awa/signin', [
                    "validation" => $this->validator,
                ]);
            } else {
                $model = new AdminModel();
                $admin = $model->where('email', $this->request->getVar('email'))->first();

                // Verify hashed password
                if ($admin && password_verify($this->request->getVar('password'), $admin['password'])) {
                    // Password is correct, proceed with login

                    // Storing session values 
                    $this->setUserSession($admin);
                    // Redirecting to dashboard after login 
                    $session = session();
                    $session->setFlashdata('success', 'Welcome to Dashboard!');
                    return redirect()->to(base_url('dashboard'));
                } else {
                    // Password is incorrect

                    return redirect()->to(base_url('signin'))->with('error', 'Invalid email or password');
                }
            }
        }
        return view('admin-awa/signin');
    }

    private function setUserSession($admin)
    {
        $data = [
            'id' => $admin['id'],
            'username' => $admin['username'],
            'email' => $admin['email'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }


    public function signupPage()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {
            // Let's do the validation here 
            $rules = [
                'username' => 'required|min_length[3]|max_length[20]',
                'email' => [
                    'rules' => 'required|valid_email|is_unique[admin.email]',
                    'errors' => [
                        'is_unique[admin.email]' => 'This email is already registered,please try another email.',
                    ],
                ],
                'password' => 'required|min_length[8]|max_length[255]',
                
            ];


            if (!$this->validate($rules)) {
                return view('admin-awa/signup', [
                    "validation" => $this->validator,
                ]);
            } else {
                $model = new AdminModel();

                // Hash the password before saving
                $hashedPassword = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);

                $newData = [
                    'username' => $this->request->getVar('username'),
                    'email' => $this->request->getVar('email'),
                    'password' => $hashedPassword,
                ];

                $model->save($newData);

                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                return redirect()->to(base_url('signin'));
            }
        }

        return view('admin-awa/signup');
    }
    public function change_password()
    {
        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'old-password' => [
                    'label' => 'Old password',
                    'rules' => 'required',
                ],
                'new-password' => [
                    'label' => 'New password',
                    'rules' => 'required|min_length[8]',
                ],
                
            ];

            $validationMessages = [
                'cnew-password' => [
                    'matches[new-password]' => 'The new password and confirm new password do not match.'
                ]
            ];

            if ($this->validate($validationRules, $validationMessages)) {
                $model = new AdminModel();

                $adminId = session()->get('id');
                $admin = $model->find($adminId);

                if ($admin && password_verify($this->request->getPost('old-password'), $admin['password'])) {
                    $hashedPassword = password_hash($this->request->getPost('new-password'), PASSWORD_DEFAULT);

                    $updated = $model->update($adminId, ['password' => $hashedPassword]);

                    if ($updated) {
                        return redirect()->to(base_url('admin-user-profile'))->with('success', 'Password updated successfully!');
                    } else {
                        return redirect()->back()->withInput()->with('error', 'Failed to update password.');
                    }
                } else {
                    return redirect()->back()->withInput()->with('error', 'Old password does not match.');
                }
            }
        }

        // If validation fails or the request method is not POST
        return view('admin-awa/user_profile', ['validation' => $this->validator]);
    }



    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('signin'));
    }
   
}