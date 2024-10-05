{{-- <div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GD Company</title>
    <link rel="stylesheet" href="dist/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto flex items-center justify-between py-4">
            <!-- Logo -->
            <a href="#" class="flex items-center">
                <img src="image/logo.svg" alt="Logo" class="w-32">
            </a>
            <!-- Search bar -->
            <div class="flex-grow max-w-2xl mx-8 relative flex items-center">
                <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-lg text-gray-400">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" 
                       class="w-full border border-gray-300 border-r-0 pl-10 py-2 pr-3 rounded-l-md focus:outline-none" 
                       placeholder="Search...">
                <button class="bg-red-500 border border-red-500 text-white px-8 py-2 rounded-r-md hover:bg-transparent hover:text-red-500 transition">
                    Search
                </button>
            </div>
            <!-- Icons -->
            <div class="flex items-center space-x-6">
                <a href="#" class="text-center text-gray-700 hover:text-red-500 transition relative">
                    <div class="text-2xl">
                    <i class="far fa-heart"></i>
                </div>
                <div class="text-xs leading-3">Wish List</div>
                <span class="absolute right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-red-500 text-xs text-white">8</span>
            </a>
                <a href="#" class="text-center text-gray-700 hover:text-red-500 transition relative">
                    <div class="text-2xl">
                    <i class="far fa-shopping-bag"></i>
                </div>
                <div class="text-xs leading-3">Cart</div>
                <span class="absolute right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-red-500 text-xs text-white">8</span>
            </a>
                <a href="#" class="text-center text-gray-700 hover:text-red-500 transition relative">
                    <div class="text-2xl">
                    <i class="far fa-user"></i>
                </div>
                <div class="text-xs leading-3">Acount</div>
                </a>
            </div>
        </div>
        <!-- end header -->
    </header>
    <!-- navbar -->
     <nav class="bg-gray-800">
        <div class="container flex">
            <!-- all category -->
            <div class="py-8 px-4 bg-red-500 flex items-center cursor-pointer ml-24 relative group">
                <span class="text-white">
                    <i class="fas fa-bars"></i>
                </span>
                <span class="capitalize ml-2 text-white">All categories</span>
                <div class="absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-deshed hidden group-hover:block opacity-0 group-hover:opacity-100 transition duration-300 invisible group-hover:visible">
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="image/icons/bed-2.svg" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Bedroom</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="image/icons/sofa.svg" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Sofa</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="image/icons/office.svg" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Office</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="image/icons/outdoor-cafe.svg" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Outdoor</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="image/icons/bed-2.svg" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Mottress</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="image/icons/restaurant.svg" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Dining</span>
                    </a>
                </div>
            </div>
             <!-- all category end -->
              <!-- navbar links -->
               <div class="flex items-center justify-between flex-grow pl-12">
                <div class="flex items-center space-x-6 capitalize">
                    <a href="#" class="text-gray-200 hover:text-white transition">Home</a>
                    <a href="#" class="text-gray-200 hover:text-white transition">Shop</a>
                    <a href="#" class="text-gray-200 hover:text-white transition">About</a>
                    <a href="#" class="text-gray-200 hover:text-white transition">Contact us</a>
                </div>
                <a href="#" class="text-gray-200 hover:text-white transition">Login/Register</a>
               </div>
        </div>
     </nav>
     <!-- end navbar -->

     <!-- login -->
      <div class="container py-16">
        <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
            <h2 class="text-2xl uppercase font-medium">Login</h2>
            <p class="text-gray-600 mb-6 text-sm">
                Login if you are a returing customer
            </p>
            <form action="">
                <div class="space-y-4">
                    <div>  
                        <label for="email" class="text-gray-600 mb-2 block">Email Address</label>  
                        <input id="email" type="email" class="block w-full border border-gray-100 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-red-500 placeholder-gray-400" placeholder="Enter your email adress">  
                    </div>
                    <div>  
                        <label for="password" class="text-gray-600 mb-2 block">Password</label>  
                        <input id="password" type="password" class="block w-full border border-gray-100 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-red-500 placeholder-gray-400" placeholder="Enter your password">  
                    </div>
                </div>
                <div class="flex items-center mt-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="agreement" class="accent-red-500 focus:ring-0 rounded-sm cursor-pointer">
                        <label for="agreement" class="text-gray-600 ml-3 cursor-pointer">Remenber me</label>
                    </div>
                    <a href="#" class="text-red-500 ml-auto">Forgot password</a>
                </div>
                <div class="mt-4">
                    <button type="submit" class="block w-full py-2 text-center text-white bg-red-500 border border-red-500 rounded hover:bg-transparent hover:text-red-500 transition uppercase font-roboto font-medium">Login</button>
                </div>
            </form>
            
            <!-- login with -->
        <div class="mt-6 flex justify-center items-center relative">
            <div class="text-gray-600 uppercase px-3 bg-white z-10 relative">Or login with</div>
            <div class="absolute left-0 top-1/2 w-full border-b-2 border-gray-200"></div>
        </div>
        <div class="flex mt-4 gap-4">
            <a href="#" class="w-1/2 py-2 text-center bg-blue-600 text-whiterounded uppercase font-roboto font-medium text-sm hover:bg-blue-700">Facebook</a>
            <a href="#" class="w-1/2 py-2 text-center bg-yellow-600 text-whiterounded uppercase font-roboto font-medium text-sm hover:bg-yellow-700">Google</a>
        </div>
        <!-- login with end -->
        <p class="mt-4 text-gray-600 text-center">
            Don't have an account? <a href="#" class="text-red-500">Register now</a>
        </p>
        </div>
      </div>
      <!-- login end -->

    <!-- footer -->
    <footer class="bg-white pt-16 pb-12 border-t border-gray-100">
        <div class="container grid grid-cols-3 ml-40">
            <!-- footer text -->
             <div class="col-span-1 space-y-8">
                <img src="image/logo.svg" class="w-30">
                <p class="text-gray-500">
                    Lorem, ipsum dolor sit amet consecteur adipiscing elit, rationne, perro
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
             </div>
             <!-- footer text end -->
              <!-- footer link -->
               <div class="col-span-2 grid grid-cols-2 gap-8">
                <div class="grid grid-cols-2 gap-8">
                    <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracting-wider mb-2">Solutions</h3>
                    <div class="mt-4 space-y-4">
                    <a href="#" class="text-base text-gray-400 hover:text-gray-900 block">Marketing</a>
                    <a href="#" class="text-base text-gray-400 hover:text-gray-900 block">Analytics</a>
                    <a href="#" class="text-base text-gray-400 hover:text-gray-900 block">Commerce</a>
                    <a href="#" class="text-base text-gray-400 hover:text-gray-900 block">insight</a>
                    </div>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 tracting-wider mb-2">Support</h3>
                        <div class="mt-4 space-y-4">
                        <a href="#" class="text-base text-gray-400 hover:text-gray-900 block">Pricing</a>
                        <a href="#" class="text-base text-gray-400 hover:text-gray-900 block">Documentation</a>
                        <a href="#" class="text-base text-gray-400 hover:text-gray-900 block">Guides</a>
                        <a href="#" class="text-base text-gray-400 hover:text-gray-900 block">API Status</a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8">
                    <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracting-wider mb-2">Solutions</h3>
                    <div class="mt-4 space-y-4">
                    <a href="#" class="text-base text-gray-400 hover:text-gray-900 block">Marketing</a>
                    <a href="#" class="text-base text-gray-400 hover:text-gray-900 block">Analytics</a>
                    <a href="#" class="text-base text-gray-400 hover:text-gray-900 block">Commerce</a>
                    <a href="#" class="text-base text-gray-400 hover:text-gray-900 block">insight</a>
                    </div>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 tracting-wider mb-2">Support</h3>
                        <div class="mt-4 space-y-4">
                        <a href="#" class="text-base text-gray-400 hover:text-gray-900 block">Pricing</a>
                        <a href="#" class="text-base text-gray-400 hover:text-gray-900 block">Documentation</a>
                        <a href="#" class="text-base text-gray-400 hover:text-gray-900 block">Guides</a>
                        <a href="#" class="text-base text-gray-400 hover:text-gray-900 block">API Status</a>
                        </div>
                    </div>
                </div>
               </div>
               <!-- footer link end -->
        </div>
     </footer>
    <!-- footer end -->
    <!-- copyright -->
    <div class="bg-gray-800 py-4">
        <div class="container flex items-center justify-between">
            <p class="text-white ml-40">&copy; RAFCART - ALL Rights Reserved</p>
            <div>
                <img src="image/methods.png" alt="Méthodes de paiement" class="h-5">
            </div>
        </div>
    </div>
    <!-- copyright end -->

    </body>
</html>
</div> --}}
