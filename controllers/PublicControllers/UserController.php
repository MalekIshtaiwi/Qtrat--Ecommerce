<?php
require_once 'models/PublicModels/User.php';
require_once 'controllers/Controller.php';
class UserController extends Controller
{

    public function index()
    {
        if (isset($_SESSION['userId']) && !empty($_SESSION['userId'])) {
            $this->redirect('/home');
        } else {
            $user = $this->model('user');
            $users = $user->all();
    
            $title = 'Users';
            $this->render('public.auth.index', [
                'pageTitle' => 'All users',
                'users' => $users
            ]);
        }


    }


    public function show($id)
    {
        echo "<h1>Showing user with ID: {$id}</h1>";
    }
    public function create()
    {
        $this->render('admin.users.create', ['title' => 'Create Product']);
    }

    public function store()
    {
        // 1. Retrieve data from POST
        $firstName = $_POST['firstname'] ?? null;
        $lastName = $_POST['lastname'] ?? null;
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $confirmPassword = $_POST['confirm_password'] ?? null;
        $phoneNumber = $_POST['phone_number'] ?? null;
        $address = $_POST['address'] ?? null;
    
        // 2. Validate the data
        $errors = [];
    
        // Validate password
        if (strlen($password) < 8) {
            $errors['password'] = "Password must be at least 8 characters long.";
        }
        if (!preg_match('/[A-Z]/', $password)) {
            $errors['password'] = "Password must contain at least one uppercase letter.";
        }
        if (!preg_match('/[a-z]/', $password)) {
            $errors['password'] = "Password must contain at least one lowercase letter.";
        }
        if (!preg_match('/[0-9]/', $password)) {
            $errors['password'] = "Password must contain at least one number.";
        }
        if ($password !== $confirmPassword) {
            $errors['confirm_password'] = "Passwords do not match.";
        }
    
        // Validate phone number (example: must be 10 digits)
        if (!preg_match('/^[0-9]{10}$/', $phoneNumber)) {
            $errors['phone_number'] = "Phone number must be 10 digits.";
        }
        
    
        // Validate address (example: must not be empty)
        if (empty($address)) {
            $errors['address'] = "Address is required.";
        }
    
        // If there are errors, re-render the form with errors
        if (!empty($errors)) {
            // Store errors in session or pass them to the view
            $_SESSION['errors'] = $errors;
            $this->redirect('/user'); // Redirect back to the form
            return;
        }
    
        // 3. If validation passes, create the user
        $user = $this->model('user');
        $user->create([
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'phone_number' => $phoneNumber,
            'address' => $address
        ]);
    
        // 4. Redirect to a success page or login page
        $this->redirect('/user');
    }
    // controllers/UserController.php
public function login()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // 1. Retrieve data from POST
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;

        // 2. Validate the data
        $errors = [];
        if (empty($email)) {
            $errors['email'] = "Email is required.";
        }
        if (empty($password)) {
            $errors['password'] = "Password is required.";
        }

        // 3. If validation fails, re-render the form with errors
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $this->redirect('/user'); // Redirect back to the login form
            return;
        }

        // 4. Find the user by email
        $user = $this->model('user');
        $userData = $user->findByEmail($email);

        // 5. Verify the password
        if ($userData && password_verify($password, $userData['password'])) {
            // Login successful
            $_SESSION['userId'] = $userData['id'];
            $_SESSION['user_email'] = $userData['email'];
            $_SESSION['firstName'] = $userData['first_name'];
            $_SESSION['lastName'] = $userData['last_name'];
            $_SESSION['address'] = $userData['address'];
            $_SESSION['phoneNumber'] = $userData['phone_number'];
            $this->redirect('/home'); // Redirect to the dashboard or home page
        } else {
            // Login failed
            $errors['login'] = "Invalid email or password.";
            $_SESSION['errors'] = $errors;
            $this->redirect('/user'); // Redirect back to the login form
        }
    } else {
        // Display the login form
        $this->render('public.auth.index', ['title' => 'Login']);
    }
}

function userLogout(){
    session_unset();
    session_destroy();
    $this->render('public.auth.index', ['title' => 'User Login']);
}



public function destroy($id)
{
    $user = $this->model('user');
    $user->delete($id);
    $this->redirect('/users');

}
}