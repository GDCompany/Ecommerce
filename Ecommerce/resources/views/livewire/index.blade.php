<div>
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
     <!-- banner -->
     <div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url(image/banner-bg.jpg);">
        <div class="container">
            <h1 class="text-6xl text-gray-800 font-medium nb-4 capitalize ml-40">
                best collection for <br> Home decoration
            </h1>
            <p class="ml-40">
                Rejoignez-nous pour améliorer vos compétences 
                et élargir vos connaissances. <br> Explorez
                 nos cours et formations adaptés à tous les niveaux.
            </p>
            <div class="mt-12">
                <a href="#" class="bg-red-500 border border-red-500 text-white px-8 py-3 font-medium rounded-md hover:bg-transparent hover:text-red-500 transition ml-40">Shop Now</a>
            </div>
        </div>

     </div>
     <!-- banner end -->
      <!-- feature section -->
       <div class="container ml-40">
        <div class="w-10/12 grid grid-cols-3 gap-6 mx-auto justify-center">
            <!-- single feature -->
        <div class="border border-red-500 rounded-sm px-3 py-6 flex justify-center items-center gap-5 transform translate-y-8">
            <img src="image/icons/delivery-van.svg" class="w-12 h-12 object cover">
            <div>
                <h4 class="font-medium capitalize text-lg">Free Shopping</h4>
                <p class="text-gray-500 text-sm">order over $200</p>
            </div>
        </div>
        <!-- end single feature -->
          <!-- single feature -->
        <div class="border border-red-500 rounded-sm px-3 py-6 flex justify-center items-center gap-5 transform translate-y-8">
            <img src="image/icons/money-back.svg" class="w-12 h-12 object cover">
            <div>
                <h4 class="font-medium capitalize text-lg">Money Returns</h4>
                <p class="text-gray-500 text-sm">30 Days money returns</p>
            </div>
        </div>
        <!-- end single feature -->
          <!-- single feature -->
        <div class="border border-red-500 rounded-sm px-3 py-6 flex justify-center items-center gap-5 transform translate-y-8">
            <img src="image/icons/service-hours.svg" class="w-12 h-12 object cover">
            <div>
                <h4 class="font-medium capitalize text-lg">24/7 Support</h4>
                <p class="text-gray-500 text-sm">Customer support</p>
            </div>
        </div>
        <!-- end single feature -->  
    </div>
        </div>
       <!-- end feature section  -->

        <!-- categories -->
         <div class="container py-16 ml-40 transform translate-y-12">
            <h2 class="text-3xl font-medium text-gray-800 uppercase mb-6">Shop by category</h2>

            <div class="grid grid-cols-3 gap-3">  
                <!-- Single category -->  
                <div class="group relative rounded-sm overflow-hidden">  
                    <img src="image/category/category-1.jpg" class="w-full">  
                    <a href="#" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 transition duration-100 ease-in-out group-hover:bg-opacity-60">   
                        <span class="text-xl text-white font-roboto font-medium">Bedroom</span>  
                    </a>  
                </div>  
                <!-- End single category -->  
                 <!-- Single category -->  
                <div class="group relative rounded-sm overflow-hidden">  
                    <img src="image/category/category-2.jpg" class="w-full">  
                    <a href="#" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 transition duration-100 ease-in-out group-hover:bg-opacity-60">   
                        <span class="text-xl text-white font-roboto font-medium">Sofa</span>  
                    </a>  
                </div>  
                <!-- End single category --> 
                 <!-- Single category -->  
                <div class="group relative rounded-sm overflow-hidden">  
                    <img src="image/category/category-3.jpg" class="w-full">  
                    <a href="#" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 transition duration-100 ease-in-out group-hover:bg-opacity-60">   
                        <span class="text-xl text-white font-roboto font-medium">Office</span>  
                    </a>  
                </div>  
                <!-- End single category --> 
                 <!-- Single category -->  
                <div class="group relative rounded-sm overflow-hidden">  
                    <img src="image/category/category-4.jpg" class="w-full">  
                    <a href="#" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 transition duration-100 ease-in-out group-hover:bg-opacity-60">   
                        <span class="text-xl text-white font-roboto font-medium">Outdoor</span>  
                    </a>  
                </div>  
                <!-- End single category --> 
                 <!-- Single category -->  
                <div class="group relative rounded-sm overflow-hidden">  
                    <img src="image/category/category-5.jpg" class="w-full">  
                    <a href="#" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 transition duration-100 ease-in-out group-hover:bg-opacity-60">   
                        <span class="text-xl text-white font-roboto font-medium">Mattress</span>  
                    </a>  
                </div>  
                <!-- End single category --> 
                 <!-- Single category -->  
                <div class="group relative rounded-sm overflow-hidden">  
                    <img src="image/category/category-6.jpg" class="w-full">  
                    <a href="#" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 transition duration-100 ease-in-out group-hover:bg-opacity-60">   
                        <span class="text-xl text-white font-roboto font-medium">Dining</span>  
                    </a>  
                </div>  
                <!-- End single category --> 
            </div>
         </div>
         <!-- categories -->

        <!-- product wipper -->  
        <div class="container py-16 ml-40"> 
            <h2 class="text-3xl font-medium text-gray-800 uppercase mb-6">Top New Arrival</h2>  
            <!-- product grid -->  
            <div class="grid grid-cols-4 gap-4">
                <!-- single produit  -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <!-- product image -->
                    <div class="relative">  
                        <img src="image/products/product1.jpg" class="w-full">  
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="fas fa-search"></i>  
                            </a>  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="far fa-heart"></i>   
                            </a>  
                        </div>  
                    </div>  
                    <!-- end product image -->  
        
                    <!-- product content -->  
                    <div class="pt-4 pb-3 px-4">  
                        <a href="#">  
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                        </a>  
                    </div>  
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                        <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                        <p class="text-sm text-gray-400 line-through">$55.00</p>  
                    </div>  
                    <div class="flex items-center ml-5">  
                        <div class="flex gap-1 text-sm text-yellow-400">  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                        </div>  
                        <div class="text-xs text-gray-500 ml-3">(150)</div>  
                    </div>  
                    <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                    <!-- product content end-->  
                </div>
                <!-- single product end -->
                            <!-- single produit  -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <!-- product image -->
                    <div class="relative">  
                        <img src="image/products/product2.jpg" class="w-full">  
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="fas fa-search"></i>  
                            </a>  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="far fa-heart"></i>   
                            </a>  
                        </div>  
                    </div>  
                    <!-- end product image -->  
        
                    <!-- product content -->  
                    <div class="pt-4 pb-3 px-4">  
                        <a href="#">  
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                        </a>  
                    </div>  
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                        <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                        <p class="text-sm text-gray-400 line-through">$55.00</p>  
                    </div>  
                    <div class="flex items-center ml-5">  
                        <div class="flex gap-1 text-sm text-yellow-400">  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                        </div>  
                        <div class="text-xs text-gray-500 ml-3">(150)</div>  
                    </div>  
                    <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                    <!-- product content end-->  
                </div>
                <!-- single product end -->
                            <!-- single produit  -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <!-- product image -->
                    <div class="relative">  
                        <img src="image/products/product3.jpg" class="w-full">  
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="fas fa-search"></i>  
                            </a>  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="far fa-heart"></i>   
                            </a>  
                        </div>  
                    </div>  
                    <!-- end product image -->  
        
                    <!-- product content -->  
                    <div class="pt-4 pb-3 px-4">  
                        <a href="#">  
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                        </a>  
                    </div>  
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                        <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                        <p class="text-sm text-gray-400 line-through">$55.00</p>  
                    </div>  
                    <div class="flex items-center ml-5">  
                        <div class="flex gap-1 text-sm text-yellow-400">  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                        </div>  
                        <div class="text-xs text-gray-500 ml-3">(150)</div>  
                    </div>  
                    <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                    <!-- product content end-->  
                </div>
                <!-- single product end -->
                            <!-- single produit  -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <!-- product image -->
                    <div class="relative">  
                        <img src="image/products/product4.jpg" class="w-full">  
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="fas fa-search"></i>  
                            </a>  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="far fa-heart"></i>   
                            </a>  
                        </div>  
                    </div>  
                    <!-- end product image -->  
        
                    <!-- product content -->  
                    <div class="pt-4 pb-3 px-4">  
                        <a href="#">  
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                        </a>  
                    </div>  
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                        <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                        <p class="text-sm text-gray-400 line-through">$55.00</p>  
                    </div>  
                    <div class="flex items-center ml-5">  
                        <div class="flex gap-1 text-sm text-yellow-400">  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                        </div>  
                        <div class="text-xs text-gray-500 ml-3">(150)</div>  
                    </div>  
                    <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                    <!-- product content end-->  
                </div>
                <!-- single product end -->
                                 <!-- single produit  -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <!-- product image -->
                    <div class="relative">  
                        <img src="image/products/product5.jpg" class="w-full">  
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="fas fa-search"></i>  
                            </a>  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="far fa-heart"></i>   
                            </a>  
                        </div>  
                    </div>  
                    <!-- end product image -->  
        
                    <!-- product content -->  
                    <div class="pt-4 pb-3 px-4">  
                        <a href="#">  
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                        </a>  
                    </div>  
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                        <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                        <p class="text-sm text-gray-400 line-through">$55.00</p>  
                    </div>  
                    <div class="flex items-center ml-5">  
                        <div class="flex gap-1 text-sm text-yellow-400">  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                        </div>  
                        <div class="text-xs text-gray-500 ml-3">(150)</div>  
                    </div>  
                    <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                    <!-- product content end-->  
                </div>
                <!-- single product end -->
                                 <!-- single produit  -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <!-- product image -->
                    <div class="relative">  
                        <img src="image/products/product6.jpg" class="w-full">  
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="fas fa-search"></i>  
                            </a>  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="far fa-heart"></i>   
                            </a>  
                        </div>  
                    </div>  
                    <!-- end product image -->  
        
                    <!-- product content -->  
                    <div class="pt-4 pb-3 px-4">  
                        <a href="#">  
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                        </a>  
                    </div>  
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                        <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                        <p class="text-sm text-gray-400 line-through">$55.00</p>  
                    </div>  
                    <div class="flex items-center ml-5">  
                        <div class="flex gap-1 text-sm text-yellow-400">  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                        </div>  
                        <div class="text-xs text-gray-500 ml-3">(150)</div>  
                    </div>  
                    <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                    <!-- product content end-->  
                </div>
                <!-- single product end -->
                                 <!-- single produit  -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <!-- product image -->
                    <div class="relative">  
                        <img src="image/products/product7.jpg" class="w-full">  
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="fas fa-search"></i>  
                            </a>  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="far fa-heart"></i>   
                            </a>  
                        </div>  
                    </div>  
                    <!-- end product image -->  
        
                    <!-- product content -->  
                    <div class="pt-4 pb-3 px-4">  
                        <a href="#">  
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                        </a>  
                    </div>  
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                        <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                        <p class="text-sm text-gray-400 line-through">$55.00</p>  
                    </div>  
                    <div class="flex items-center ml-5">  
                        <div class="flex gap-1 text-sm text-yellow-400">  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                        </div>  
                        <div class="text-xs text-gray-500 ml-3">(150)</div>  
                    </div>  
                    <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                    <!-- product content end-->  
                </div>
                <!-- single product end -->
                                 <!-- single produit  -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <!-- product image -->
                    <div class="relative">  
                        <img src="image/products/product9.jpg" class="w-full">  
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="fas fa-search"></i>  
                            </a>  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="far fa-heart"></i>   
                            </a>  
                        </div>  
                    </div>  
                    <!-- end product image -->  
        
                    <!-- product content -->  
                    <div class="pt-4 pb-3 px-4">  
                        <a href="#">  
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                        </a>  
                    </div>  
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                        <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                        <p class="text-sm text-gray-400 line-through">$55.00</p>  
                    </div>  
                    <div class="flex items-center ml-5">  
                        <div class="flex gap-1 text-sm text-yellow-400">  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                        </div>  
                        <div class="text-xs text-gray-500 ml-3">(150)</div>  
                    </div>  
                    <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                    <!-- product content end-->  
                </div>
                <!-- single product end -->
                                 <!-- single produit  -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <!-- product image -->
                    <div class="relative">  
                        <img src="image/products/product10.jpg" class="w-full">  
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="fas fa-search"></i>  
                            </a>  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="far fa-heart"></i>   
                            </a>  
                        </div>  
                    </div>  
                    <!-- end product image -->  
        
                    <!-- product content -->  
                    <div class="pt-4 pb-3 px-4">  
                        <a href="#">  
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                        </a>  
                    </div>  
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                        <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                        <p class="text-sm text-gray-400 line-through">$55.00</p>  
                    </div>  
                    <div class="flex items-center ml-5">  
                        <div class="flex gap-1 text-sm text-yellow-400">  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                        </div>  
                        <div class="text-xs text-gray-500 ml-3">(150)</div>  
                    </div>  
                    <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                    <!-- product content end-->  
                </div>
                <!-- single product end -->
                                 <!-- single produit  -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <!-- product image -->
                    <div class="relative">  
                        <img src="image/products/product11.jpg" class="w-full">  
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="fas fa-search"></i>  
                            </a>  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="far fa-heart"></i>   
                            </a>  
                        </div>  
                    </div>  
                    <!-- end product image -->  
        
                    <!-- product content -->  
                    <div class="pt-4 pb-3 px-4">  
                        <a href="#">  
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                        </a>  
                    </div>  
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                        <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                        <p class="text-sm text-gray-400 line-through">$55.00</p>  
                    </div>  
                    <div class="flex items-center ml-5">  
                        <div class="flex gap-1 text-sm text-yellow-400">  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                        </div>  
                        <div class="text-xs text-gray-500 ml-3">(150)</div>  
                    </div>  
                    <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                    <!-- product content end-->  
                </div>
                <!-- single product end -->
                                 <!-- single produit  -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <!-- product image -->
                    <div class="relative">  
                        <img src="image/products/product12.jpg" class="w-full">  
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="fas fa-search"></i>  
                            </a>  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="far fa-heart"></i>   
                            </a>  
                        </div>  
                    </div>  
                    <!-- end product image -->  
        
                    <!-- product content -->  
                    <div class="pt-4 pb-3 px-4">  
                        <a href="#">  
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                        </a>  
                    </div>  
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                        <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                        <p class="text-sm text-gray-400 line-through">$55.00</p>  
                    </div>  
                    <div class="flex items-center ml-5">  
                        <div class="flex gap-1 text-sm text-yellow-400">  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                        </div>  
                        <div class="text-xs text-gray-500 ml-3">(150)</div>  
                    </div>  
                    <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                    <!-- product content end-->  
                </div>
                <!-- single product end -->
                                 <!-- single produit  -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <!-- product image -->
                    <div class="relative">  
                        <img src="image/products/product8.jpg" class="w-full">  
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="fas fa-search"></i>  
                            </a>  
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                <i class="far fa-heart"></i>   
                            </a>  
                        </div>  
                    </div>  
                    <!-- end product image -->  
        
                    <!-- product content -->  
                    <div class="pt-4 pb-3 px-4">  
                        <a href="#">  
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                        </a>  
                    </div>  
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                        <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                        <p class="text-sm text-gray-400 line-through">$55.00</p>  
                    </div>  
                    <div class="flex items-center ml-5">  
                        <div class="flex gap-1 text-sm text-yellow-400">  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                            <span><i class="fas fa-star"></i></span>  
                        </div>  
                        <div class="text-xs text-gray-500 ml-3">(150)</div>  
                    </div>  
                    <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                    <!-- product content end-->  
                </div>
                <!-- single product end -->
            </div>
            <!-- end product grid -->  
        </div>  
        <!-- end product wrpper -->

        <!-- add section -->
         <div class="container pb-16 ml-40">
            <img src="image/offer.jpg" alt="w-full">
         </div>
         <!-- add section end -->
        
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

</div>
