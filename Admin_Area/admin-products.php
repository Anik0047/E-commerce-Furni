<?php

include('../Database_connect/connect.php');

?>


<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Robotech - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Mannatthemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico" /> -->

    <!-- Css -->
    <!-- Main Css -->
   <!--  <link rel="stylesheet" href="assets/libs/icofont/icofont.min.css">
    <link href="assets/libs/flatpickr/flatpickr.min.css" type="text/css" rel="stylesheet"> -->
    <link rel="stylesheet" href="assets/css/tailwind.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="bg-[#EEF0FC] dark:bg-gray-900">

    <!-- leftbar-tab-menu -->


    <div class="min-h-full z-[99]  fixed inset-y-0 print:hidden bg-gradient-to-t from-[#6f3dc3] from-10% via-[#603dc3] via-40% to-[#5c3dc3] to-100% dark:bg-[#603dc3] main-sidebar duration-300 group-data-[sidebar=dark]:bg-[#603dc3] group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#603dc3]">
        <div class=" text-center border-b bg-[#603dc3] border-r h-[64px] flex justify-center items-center brand-logo dark:bg-[#603dc3] dark:border-slate-700/40 group-data-[sidebar=dark]:bg-[#603dc3] group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#603dc3] group-data-[sidebar=brand]:border-slate-700/40">
            <a href="index.html" class="logo">
                <span>
                    <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm h-8 align-middle inline-block">
                </span>
                <span>
                    <img src="assets/images/logo.png" alt="logo-large" class="logo-lg h-[28px] logo-light hidden dark:inline-block ms-1 group-data-[sidebar=dark]:inline-block group-data-[sidebar=brand]:inline-block">
                    <img src="assets/images/logo.png" alt="logo-large" class="logo-lg h-[28px] logo-dark inline-block dark:hidden ms-1 group-data-[sidebar=dark]:hidden group-data-[sidebar=brand]:hidden">
                </span>
            </a>
        </div>
        <div class="border-r pb-14 h-[100vh] dark:bg-[#603dc3] dark:border-slate-700/40 group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40" data-simplebar>
            <div class="p-4 block">
                <ul class="navbar-nav">
                    <li class="uppercase text-[11px]  text-primary-500 dark:text-primary-400 mt-0 leading-4 mb-2 group-data-[sidebar=dark]:text-primary-400 group-data-[sidebar=brand]:text-primary-300">
                        <span class="text-[9px] text-slate-600 dark:text-slate-500 group-data-[sidebar=dark]:text-slate-500 group-data-[sidebar=brand]:text-slate-400">DashboardS & Apps</span>
                    </li>
                    <li>
                        <div id="parent-accordion" data-fc-type="accordion">
                            <a href="index.php" class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 " data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="home" class="w-5 h-5 text-center text-slate-800 dark:text-slate-400 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>Admin</span>
                                <i class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180 "></i>
                            </a>
                            <a href="admin-products.php" class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 " data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="home" class="w-5 h-5 text-center text-slate-800 dark:text-slate-400 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>Products</span>
                                <i class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180 "></i>
                            </a>
                            <a href="admin-add-product.php" class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 " data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="home" class="w-5 h-5 text-center text-slate-800 dark:text-slate-400 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>Add Product</span>
                                <i class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180 "></i>
                            </a>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <nav id="topbar" class="topbar border-b  dark:border-slate-700/40  fixed inset-x-0  duration-300
             block print:hidden z-50">
        <div class="mx-0 flex max-w-full flex-wrap items-center lg:mx-auto relative top-[50%] start-[50%] transform -translate-x-1/2 -translate-y-1/2">
            <div class="ltr:mx-2  rtl:mx-2">
                <button id="toggle-menu-hide" class="button-menu-mobile flex rounded-full md:me-0 relative">
                    <!-- <i class="ti ti-chevrons-left text-3xl  top-icon"></i> -->
                    <i data-lucide="menu" class="top-icon w-5 h-5"></i>
                </button>
            </div>
            <div class="flex items-center md:w-[40%] lg:w-[30%] xl:w-[20%]">
                <div class="relative ltr:mx-2 rtl:mx-2 self-center">
                    <button class="px-2 py-1 bg-primary-500/10 border border-transparent collapse:bg-green-100 text-primary text-sm rounded hover:bg-blue-600 hover:text-white"><i class="ti ti-plus me-1"></i> New Task</button>
                </div>
            </div>

            <div class="order-1 ltr:ms-auto rtl:ms-0 rtl:me-auto flex items-center md:order-2">
                <div class="ltr:me-2 ltr:md:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4 dropdown relative">
                    <button type="button" class="dropdown-toggle flex rounded-full md:me-0" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                        <span data-lucide="search" class="top-icon w-5 h-5"></span>
                    </button>

                <div class="ltr:me-2 ltr:lg:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4 dropdown relative">
                    <button type="button" class="dropdown-toggle flex rounded-full md:me-0" id="Notifications" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                        <span data-lucide="bell" class="top-icon w-5 h-5"></span>
                    </button>

                   
                <div class="me-2  dropdown relative">
                    <button type="button" class="dropdown-toggle flex items-center rounded-full text-sm
                    focus:bg-none focus:ring-0 dark:focus:ring-0 md:me-0" id="user-profile" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                        <img class="h-8 w-8 rounded-full" src="assets/images/users/avatar-1.png" alt="user photo" />
                        <span class="ltr:ms-2 rtl:ms-0 rtl:me-2 hidden text-left xl:block">
                            <span class="block font-medium text-slate-600 dark:text-gray-300">Maria Gibson</span>
                            <span class="-mt-0.5 block text-xs text-slate-500 dark:text-gray-400">Admin</span>
                        </span>
                    </button>

                    <div class="left-auto right-0 z-50 my-1 hidden list-none
                    divide-y divide-gray-100 rounded border border-slate-700/10
                    text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800 w-40" id="navUserdata">

                        <ul class="py-1" aria-labelledby="navUserdata">
                            <li>
                                <a href="#" class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">
                                    <span data-lucide="user" class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                    Profile</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">
                                    <span data-lucide="settings" class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                    Settings</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">
                                    <span data-lucide="dollar-sign" class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                    Earnings</a>
                            </li>
                            <li>
                                <a href="auth-lockscreen.html" class="flex items-center py-2 px-3 text-sm text-red-500 hover:bg-gray-50 hover:text-red-600
                          dark:text-red-500 dark:hover:bg-gray-900/20
                          dark:hover:text-red-500">
                                    <span data-lucide="power" class="w-4 h-4 inline-block text-red-500 dark:text-red-500 me-2"></span>
                                    Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative ltr:ms-auto rtl:me-auto rtl:ms-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
            <div class="xl:w-full">
                <div class="flex flex-wrap">
                    <div class="flex items-center py-4 w-full">
                        <div class="w-full">
                            <div class="">
                                <div class="flex flex-wrap justify-between">
                                    <div class="items-center ">
                                        <h1 class="font-medium text-3xl block dark:text-slate-100">Products</h1>
                                        <ol class="list-reset flex text-sm">
                                            <li><a href="#" class="text-gray-500 dark:text-slate-400">Robotech</a></li>
                                            <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                            <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                            <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                            <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Products</li>
                                        </ol>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            <input type="text" class="dash_date border-0 focus:border-0 focus:outline-none" readonly required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end container-->

            <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14">
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                        <div class="w-full relative mb-4">
                            <div class="flex-auto p-0 md:p-4">
                                <div class="mb-4 border-b border-gray-200 dark:border-slate-700" data-fc-type="tab">
                                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" aria-label="Tabs">
                                        <li class="me-2" role="presentation">
                                            <button class="inline-block p-4 rounded-t-lg border-b-2 active " id="all-tab" data-fc-target="#all" type="button" role="tab" aria-controls="all" aria-selected="false">All <span class="text-slate-400">(4251)</span></button>
                                        </li>
                                        <li class="me-2" role="presentation">
                                            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="published-tab" data-fc-target="#published" type="button" role="tab" aria-controls="published" aria-selected="false">Published <span class="text-slate-400">(3255)</span></button>
                                        </li>
                                        <li class="me-2" role="presentation">
                                            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="drafts-tab" data-fc-target="#drafts" type="button" role="tab" aria-controls="drafts" aria-selected="false">Drafts <span class="text-slate-400">(25)</span></button>
                                        </li>
                                        <li role="presentation">
                                            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="discount-tab" data-fc-target="#discount" type="button" role="tab" aria-controls="discount" aria-selected="false">On Discount <span class="text-slate-400">(532)</span></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flex flex-wrap gap-4 mb-3">
                                    <div class="mb-2 w-44">
                                        <select id="Category" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            <option class="dark:text-slate-700">All Category</option>
                                            <option class="dark:text-slate-700">Electronics</option>
                                            <option class="dark:text-slate-700">Furniture</option>
                                            <option class="dark:text-slate-700">Footwear</option>
                                            <option class="dark:text-slate-700">Clothes</option>
                                        </select>
                                    </div>
                                    <div class="mb-2 w-36">
                                        <select id="Vendor" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            <option class="dark:text-slate-700">Vendor</option>
                                            <option class="dark:text-slate-700">Vendor-2</option>
                                            <option class="dark:text-slate-700">Vendor-3</option>
                                        </select>
                                    </div>
                                    <div class="ms-auto">
                                        <form>
                                            <div class="relative">
                                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                    <i data-lucide="search" class="z-[1] w-5 h-5 stroke-slate-400"></i>
                                                </div>
                                                <input type="search" id="productSearch" class="form-input w-52 rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700 pl-10 p-2.5" placeholder="search">
                                            </div>
                                        </form>
                                    </div>
                                    <div>
                                        <button class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">
                                            Add product
                                        </button>
                                    </div>
                                </div>


                                <div id="myTabContent">
                                    <div class="active  p-4 bg-gray-50 rounded-lg dark:bg-gray-900" id="all" role="tabpanel" aria-labelledby="all-tab">
                                        <div class="grid grid-cols-1 p-0 md:p-4">
                                            <div class="sm:-mx-6 lg:-mx-8">
                                            <div class='relative overflow-x-auto block w-full sm:px-6 lg:px-8'>
                                                    <table class='w-full'>
                                                        <thead class='bg-gray-50 dark:bg-slate-700/20'>
                                                            <tr>
                                                                
                                                                <th scope='col' class='p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase'>
                                                                    Product & Title
                                                                </th>
                                                                <th scope='col' class='p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase'>
                                                                    Categories
                                                                </th>
                                                                <th scope='col' class='p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase'>
                                                                    Stock status
                                                                </th>
                                                                <th scope='col' class='p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase'>
                                                                    Price
                                                                </th>
                                                                <th scope='col' class='p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase'>
                                                                  Date
                                                                </th>
                                                                <th scope='col' class='p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase'>
                                                                    Action
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <?php
                                                $select_query = "SELECT * FROM `products`";
                                                $result_query = mysqli_query($con, $select_query);
                                                if($result_query){
                                                    while ($row = mysqli_fetch_assoc($result_query)) {
                                                        $product_id = $row['id'];
                                                        $product_title = $row['product_name'];
                                                        $product_description = $row['product_description'];
                                                        $product_image = $row['product_image'];
                                                        $product_price = $row['product_price'];
                                                        $product_category = $row['product_category'];
    
                                                        echo "<tbody>
                                                        <!-- 1 -->
                                                        <tr class='bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40'>
                                                            
                                                            <td class='p-3 text-sm font-medium whitespace-nowrap dark:text-white'>
                                                                <div class='flex items-center'>
                                                                    <img src='./Product Images/$product_image' alt='' class='me-2 h-8 inline-block'>
                                                                    <div class='self-center'>
                                                                        <h5 class='text-sm font-semibold text-slate-700 dark:text-gray-400'>$product_title</h5>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class='p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400'>
                                                            <h5 class='text-sm font-semibold text-slate-700 dark:text-gray-400'>$product_category</h5>
                                                            </td>
                                                            <td class='p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400'>
                                                                <span class='bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5'>In stock</span>
                                                            </td>
                                                            <td class='p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400'>
                                                            ৳ $product_price
                                                            </td>
                                                            <td class='p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400'>
                                                                12 Sep 2023
                                                            </td>
                                                            <td class='p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400'>
                                                                <a href='admin-update-product.php?updatedid=$product_id'><i class='fa-solid fa-pencil pe-2'></i></a>
                                                                <p onclick='deleteProduct($product_id)'>delete</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>";
                                                    }
                                                }
                                                
                                            ?>
                                                        
                                                    </table>
                                                </div>

                                            
                                                <!--end div-->
                                            </div><!--end div-->
                                        </div><!--end grid-->
                                    </div>               
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div> <!--end grid-->
                <!-- footer -->
                <div class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4 h-[52px] dark:border-slate-700/40">
                    <div class="container">
                        <!-- Footer Start -->
                        <footer class="footer bg-transparent  text-center  font-medium text-slate-600 dark:text-slate-400 md:text-left ">
                            &copy;
                            <script>
                                var year = new Date();
                                document.write(year.getFullYear());
                            </script>
                            Robotech
                            <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block">Crafted with <i class="ti ti-heart text-red-500"></i> by
                                Mannatthemes</span>
                        </footer>
                        <!-- end Footer -->
                    </div>
                </div>

            </div><!--end container-->
        </div><!--end page-wrapper-->
    </div><!--end /div-->

    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
  <!--   <script src="assets/libs/lucide/umd/lucide.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>

    <script src="assets/js/app.js"></script> -->
    <!-- JAVASCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        let operation = '';
        // $(document).ready(function(){
            function deleteProduct(deleteId){
                const Id = deleteId;

                operation = 'DELETE';

                $.ajax({
                    type: 'POST',
                    url: 'product-upsert.php',
                    data: 'deleteId=' + Id + '&operation=' + operation,
                    dataType: 'json',
                    success: function(response){
                        if(response.status){
                            alert(response.message);
                            setTimeout(function() {
                                location.reload();
                            }, 500);
                        }else{
                             alert(response.message);
                        }
                    }


                })
            }
        // })
    </script>
</body>

</html>