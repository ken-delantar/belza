<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <linkhref="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="loggin.css">
    <title>Login</title>
</head>

<?php
  include("loginconnection.php");
?>
<body>
<div class="h-screen flex md:flex-row flex-col justify-center items-center">
    <div class="lg:w-3/5 h-screen custom-py-1p lg:block hidden">
        <div class="bus-background bg-cover w-full h-full rounded-r-3xl"></div>
    </div>

    <div class="flex flex-col py-4 md:w-1/2 lg:w-2/5 w-full items-center">
        <p class="font-bold lg:text-4xl text-2xl w-full text-center text-[#00446b]">Bus Transportation Management System</p>
        <p class="font-semibold lg:text-3xl text-xl text-center mt-10 text-[#00446b]">&lt;LOGISTIC &gt;</p>

        <form class="xl:w-4/6 lg:w-5/6 sm:w-2/3 py-4 rounded-3xl shadow-lg mt-10 flex flex-col items-center border"
          action="loginconnection.php" method="post"
        >
            <p class="text-center mb-4 text-xl text-[#00446b]">Sign In</p>
            <hr class="border w-full border-[#00446b]">

            <div class="mt-8 w-4/5">
                <input class="mt-1 block w-full bg-transparent rounded-md border p-2" type="email" placeholder="Email" name="email">
            </div>
            <div class="mt-4 w-4/5">
                <input class="mt-1 block w-full bg-transparent rounded-md border p-2" type="password" placeholder="Password" name="password">
            </div>

            <div class="w-4/5 flex justify-between mt-4 lg:mb-12 mb-12">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" />
                    <span class="text-sm hover:text-gray-300/50 rounded-md text-[#00446b] ml-2">Remember me</span>
                </label>
                <a href="Forgot.html" class="text-[#00446b]">Forgot your password?</a>
            </div>

            <div class="flex items-center mt-4 mb-8 w-4/5">
                <a class="w-full font-medium p-2 rounded-md border bg-[#00446b]" type="submit">
                    <!-- <p class="text-center text-white">Log In</p>  -->
                    <button type="submit" class="w-full p-3  text-white rounded-md flex justify-center items-center" 
                    name="submit">Log in </button>
      
                </a>
            </div>
        </form>
    </div>
</div>

</body>

</html>