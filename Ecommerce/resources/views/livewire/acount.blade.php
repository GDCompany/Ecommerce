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

    <!-- Breadcrumbs -->
    <div class="container py-4 flex items-center ml-24 gap-3">
        <a href="index.html" class="text-red-500 text-base">
            <i class="fas fa-home"></i>
        </a>
        <span class="text-sm text-gray-400 mx-2">
            <i class="fas fa-chevron-right"></i>
        </span>
        <span class="text-gray-600 font-medium">My Account</span>
    </div>
    <!-- Breadcrumbs end -->

        <!-- Account wrapper -->
        <div class="container grid grid-cols-12 items-start gap-6 pt-4 pb-16 ml-40">
            <!-- sidebar -->
            <div class="col-span-3">
                <!-- account profile -->
                <div class="px-4 py-3 shadow flex items-center gap-4">
                    <div class="flex-shrink-0">
                        <img src="image/avatar.png" class="rounded-full w-14 h-14 border border-gray-200 p-1 object-cover">
                    </div>
                    <div class="flex-grow">
                        <p class="text-gray-600">Hello,</p>
                        <h4 class="text-gray-800 font-medium">Russell Ahmed</h4>
                    </div>
                </div>
                <!-- account profile end  -->

                <!-- profile links -->
                <div class="mt-6 bg-white shadow rounded p-4 divide-y divide-gray-200 text-gray-600">
                    <!-- single links -->
                    <div class="space-y-1 pl-8">
                        <a href="#" class="relative text-red-500 block font-medium capitalize transition">
                            <span class="absolute -left-8 top-0 text-base">
                                <i class="far fa-address-card"></i>
                            </span>
                            Manage account
                        </a>
                        <a href="#" class="relative hover:text-red-500 block capitalize transition">Profile information</a>
                        <a href="#" class="relative hover:text-red-500 block capitalize transition">Manage address</a> 
                        <a href="#" class="relative hover:text-red-500 block capitalize transition">Change password</a>
                    </div>
                    <!-- single links end -->

                    <!-- second group of links -->
                    <div class="space-y-1 pl-8 pt-4 mt-4">
                        <a href="#" class="relative hover:text-red-500 block font-medium capitalize transition">
                            <span class="absolute -left-8 top-0 text-base">
                                <i class="far fa-address-card"></i>
                            </span>
                            My Order History
                        </a>
                        <a href="#" class="relative hover:text-red-500 block capitalize transition">My Returns</a>
                        <a href="#" class="relative hover:text-red-500 block capitalize transition">My Concellations</a> 
                        <a href="#" class="relative hover:text-red-500 block capitalize transition">My Reviews</a>
                    </div>

                    <!-- second group of links -->
                    <div class="space-y-1 pl-8 pt-4 mt-4">
                        <a href="#" class="relative hover:text-red-500 block font-medium capitalize transition">
                            <span class="absolute -left-8 top-0 text-base">
                                <i class="far fa-address-card"></i>
                            </span>
                            Payment Methodes
                        </a>
                        <a href="#" class="relative hover:text-red-500 block capitalize transition">Voucher</a>
                    </div>
                    <!-- second group of links end -->
                                         <!-- second group of links -->
                    <div class="space-y-1 pl-8 pt-4 mt-4">
                        <a href="#" class="relative hover:text-red-500 block font-medium capitalize transition">
                            <span class="absolute -left-8 top-0 text-base">
                                <i class="far fa-heart"></i>
                            </span>
                            My Wishlist
                        </a>
                    </div>
                    <!-- second group of links end -->
                                                              <!-- second group of links -->
                    <div class="space-y-1 pl-8 pt-4 mt-4">
                        <a href="#" class="relative hover:text-red-500 block font-medium capitalize transition">
                            <span class="absolute -left-8 top-0 text-base">
                                <i class="far fa-address-card"></i>
                            </span>
                            Lagout
                        </a>
                    </div>
                    <!-- second group of links end -->
                </div>
                <!-- profile links end -->
            </div>
            <!-- sidebar end -->

             <!-- profile info -->
            <div class="col-span-9 grid grid-cols-3 gap-4">
                <!-- single card -->
                 <div class="shadow rounded bg-white px-4 pt-6 pb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-medium text-gray-800 text-lg">Personal profile</h3>
                        <a href="#" class="text-red-500">Edit</a>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-gray-800 font-medium">Russell Ahmed</h4>
                        <p class="text-gray-800">example@gmail.com</p>
                        <p class="text-gray-800">123 456-789</p>
                    </div>
                 </div>
                 <!-- single card end -->
                                  <!-- single card -->
                 <div class="shadow rounded bg-white px-4 pt-6 pb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-medium text-gray-800 text-lg">Personal profile</h3>
                        <a href="#" class="text-red-500">Edit</a>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-gray-800 font-medium">Russell Ahmed</h4>
                        <p class="text-gray-800">example@gmail.com</p>
                        <p class="text-gray-800">123 456-789</p>
                    </div>
                 </div>
                 <!-- single card end -->
                                  <!-- single card -->
                 <div class="shadow rounded bg-white px-4 pt-6 pb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-medium text-gray-800 text-lg">Personal profile</h3>
                        <a href="#" class="text-red-500">Edit</a>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-gray-800 font-medium">Russell Ahmed</h4>
                        <p class="text-gray-800">example@gmail.com</p>
                        <p class="text-gray-800">123 456-789</p>
                    </div>
                 </div>
                 <!-- single card end -->
            </div>
            <!-- profile info end -->

        </div>
            <!-- Account wrapper end -->


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
