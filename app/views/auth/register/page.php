<?php
require_once __DIR__ . '/../../../controller/UserController.php';
require_once __DIR__ . '/../../../models/users/UserModel.php';

$controller = new UserController();
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$request = [
    "fname" => $_POST['fname'],
    "lname" => $_POST['lname'],
    "email" => $_POST['email'],
    "password" => $_POST['password'],
    "confirm_password" => $_POST['confirm_password'],
];

$error = $controller->createUser($request);
}
?>

<div class="w-full max-w-md mx-auto mt-10">
    <div class="bg-gray-800 shadow-2xl rounded-lg p-8 border border-gray-700">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-white mb-2">Create Account</h1>
            <p class="text-gray-400">Join Steroid PHP today</p>
        </div>

        <?php if ($error): ?>
            <div class="bg-red-900 border border-red-600 text-red-200 px-4 py-3 rounded mb-6">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="fname" class="block text-sm font-medium text-gray-300 mb-2">
                        First Name
                    </label>
                    <input 
                        type="text" 
                        id="fname"
                        name="fname" 
                        placeholder="Enter your first name"
                        required
                        class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                    >
                </div>

                <div>
                    <label for="lname" class="block text-sm font-medium text-gray-300 mb-2">
                        Last Name
                    </label>
                    <input 
                        type="text" 
                        id="lname"
                        name="lname" 
                        placeholder="Enter your last name"
                        required
                        class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                    >
                </div>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
                    Email Address
                </label>
                <input 
                    type="email" 
                    id="email"
                    name="email" 
                    placeholder="Enter your email"
                    required
                    class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                >
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-300 mb-2">
                    Password
                </label>
                <input 
                    type="password" 
                    id="password"
                    name="password" 
                    placeholder="Enter your password"
                    required
                    class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                >
            </div>

            <div>
                <label for="confirm_password" class="block text-sm font-medium text-gray-300 mb-2">
                    Confirm Password
                </label>
                <input 
                    type="password" 
                    id="confirm_password"
                    name="confirm_password" 
                    placeholder="Confirm your password"
                    required
                    class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                >
            </div>

            <button 
                type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-800"
            >
                Create Account
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-gray-400">
                Already have an account? 
                <a href="/login" class="text-blue-400 hover:text-blue-300 font-medium transition duration-200">
                    Sign in here
                </a>
            </p>
        </div>
    </div>
</div>