<div class="min-h-screen flex items-center justify-center bg-gray-900 text-gray-100">
  <div class="text-center w-full px-4">
    <h1 class="text-4xl font-bold mb-2">Login to SteroidPHP</h1>
    <p class="text-lg mb-6 text-gray-400">Welcome back! Please enter your credentials.</p>

    <form action="#" method="post"
      class="max-w-md mx-auto p-6 bg-gray-800 rounded-lg shadow-lg space-y-6 border border-gray-700">
      
      <div class="">
        <label for="username_or_email" class="block text-sm font-medium text-gray-300 text-left">Username or Email</label>
        <input type="text" id="username_or_email" name="username_or_email" placeholder="Enter Username" required
          class="mt-1 block w-full px-3 py-2 bg-gray-700 text-white border border-gray-600 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-300 text-left">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter Password" required
          class="mt-1 block w-full px-3 py-2 bg-gray-700 text-white border border-gray-600 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div class="flex items-center justify-between">
        <label class="flex items-center text-sm text-gray-400">
          <input type="checkbox" name="remember" class="mr-2 text-blue-600 bg-gray-700 border-gray-600 rounded">
          Remember me
        </label>
        <a href="#" class="text-sm text-blue-400 hover:underline">Forgot password?</a>
      </div>

      <div>
        <button type="submit"
          class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md transition duration-200">
          Login
        </button>
      </div>

      <div class="text-center text-sm text-gray-400">
        No account yet? <a href="/register" class="text-blue-400 hover:underline">Register</a>
      </div>
    </form>
  </div>
</div>
