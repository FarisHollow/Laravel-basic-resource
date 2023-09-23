<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <!-- Site Title-->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
		
  </head>

<body class="bg-gray-100 font-sans">
  <div class="min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-6 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
      <h2 class="text-2xl font-semibold mb-6">Login</h2>
      <form action="#" method="POST" action='{{Route('login')}}'>
        @csrf
        <div class="mb-4">
          <label for="email" class="block text-gray-600 font-medium">Email</label>
          <input type="email" name="email" id="email" class="border border-gray-300 rounded-lg p-2 w-full focus:outline-none focus:ring focus:border-blue-300" placeholder="Email">
        </div>
        <div class="mb-6">
          <label for="password" class="block text-gray-600 font-medium">Password</label>
          <input type="password" name="password" id="password" class="border border-gray-300 rounded-lg p-2 w-full focus:outline-none focus:ring focus:border-blue-300" placeholder="Password">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-lg py-2 w-full transition duration-300 transform hover:scale-105">Sign In</button>
      </form>
      <p class="mt-4 text-gray-600 text-center">Don't have an account? <a href="{{Route('registration')}}" class="text-blue-500 hover:underline">Signup here</a></p>
    </div>
  </div>
</body>

</html>
