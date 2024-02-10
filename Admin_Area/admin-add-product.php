<?php

include('../Database_connect/connect.php');

if (isset($_POST['submit'])) {
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_category = $_POST['product_category'];
    $product_price = $_POST['product_price'];

    $product_image = $_FILES['product_image']['name'];

    $temp_image = $_FILES['product_image']['tmp_name'];

    if ($product_title == '' or $product_description == '' or $product_category == '' or $product_price == '' or $product_image == '') {
        echo "<script>alert('Please Fill All The Fields')</script>";
        exit();
    } else {
        // Move the uploaded images to a specific directory
        move_uploaded_file($temp_image, "./Product Images/$product_image");

        // Insert the product data into the 'products' table
        $insert_products = "INSERT INTO `products` (product_name, product_description, product_category, product_image, product_price) VALUES ('$product_title', '$product_description', '$product_category', '$product_image', '$product_price')";

        // Execute the insert query
        $result_query = mysqli_query($con, $insert_products);

        // Check if the insertion was successful and display a success message
        if ($result_query) {
            echo "<script>alert('Successfully inserted the products')</script>";
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">

<!-- <head> -->
<meta charset="utf-8" />
<title>Robotech - Admin & Dashboard Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
<meta content="" name="Mannatthemes" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico" />

<!-- Css -->
<link rel="stylesheet" href="assets/libs/filepond/filepond.min.css">
<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>Robotech - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Mannatthemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- Css -->
    <link rel="stylesheet" href="assets/libs/filepond/filepond.min.css">
    <link rel="stylesheet" href="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet" href="assets/libs/vanillajs-datepicker/css/datepicker.min.css">
    <link rel="stylesheet" href="assets/libs/mobius1-selectr/selectr.min.css">
    <!-- Main Css -->
    <link rel="stylesheet" href="assets/libs/icofont/icofont.min.css">
    <link href="assets/libs/flatpickr/flatpickr.min.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" href="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet" href="assets/libs/vanillajs-datepicker/css/datepicker.min.css">
    <link rel="stylesheet" href="assets/libs/mobius1-selectr/selectr.min.css">
    <!-- Main Css -->
    <link rel="stylesheet" href="assets/libs/icofont/icofont.min.css">
    <link href="assets/libs/flatpickr/flatpickr.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/tailwind.min.css">
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
                            <a href="#" class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 " data-fc-type="collapse" data-fc-parent="parent-accordion">
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





    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative ltr:ms-auto rtl:me-auto rtl:ms-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
            <div class="xl:w-full">
                <div class="flex flex-wrap">
                    <div class="flex items-center py-4 w-full">
                        <div class="w-full">
                            <div class="">
                                <div class="flex flex-wrap justify-between">
                                    <div class="items-center ">
                                        <h1 class="font-medium text-3xl block dark:text-slate-100">Add Product</h1>
                                        <ol class="list-reset flex text-sm">
                                            <li><a href="#" class="text-gray-500 dark:text-slate-400">Robotech</a></li>
                                            <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                            <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                            <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                            <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Add Product</li>
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
            </div>
            <!--end container-->

            <div class="xl:w-full  min-h-[calc(100vh-138px)] relative ">
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 justify-between">

                    <!--end col-->
                    <form action="" enctype="multipart/form-data" method="POST" class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-9 xl:col-span-9">
                        <div>
                            <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-3 xl:col-span-3">
                                <div class="w-full relative p-4">
                                    <label for="" class="font-medium text-sm text-slate-600 dark:text-slate-400">Upload Image</label>
                                    <div class="w-full mx-auto  mb-4">
                                        <input type="file" class="filepond" name="product_image" id="product_image" accept="image/png, image/jpeg, image/gif" />
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-3 xl:col-span-3">
                                <div class="w-full relative mb-4">
                                    <div class="flex-auto p-0 md:p-4">
                                        <div class="mb-2">
                                            <label for="title" class="font-medium text-sm text-slate-600 dark:text-slate-400">Title</label>
                                            <input type="title" id="product_title" name="product_title" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Title" required>
                                        </div>
                                        <div class="mb-2">
                                            <label for="description" class="font-medium text-sm text-slate-600 dark:text-slate-400">Description</label>
                                            <textarea id="product_description" name="product_description" rows="3" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Description ..."></textarea>
                                        </div>
                                        <div class="mb-2 col-span-1">
                                            <div class="grid grid-cols-2 gap-3">
                                                <div class="mb-2">
                                                    <label for="category" class="font-medium text-sm text-slate-600 dark:text-slate-400">Category</label>
                                                    <select id="product_category" name="product_category" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                        <option class="dark:text-slate-700">All Category</option>
                                                        <option class="dark:text-slate-700">Wooden</option>
                                                        <option class="dark:text-slate-700">Steel</option>
                                                    </select>
                                                </div>

                                                <div class="col-span-1">
                                                    <label for="price" class="font-medium text-sm text-slate-600 dark:text-slate-400">Price</label>
                                                    <input type="text" id="product_price" name="product_price" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Price" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="">
                                            <input type="submit" name="submit" id="" class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500" value="Add Product">

                                            <!-- <button class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">Save Product</button> -->
                                        </div>
                                    </div>
                                    <!--end card-body-->
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                    </form>
                    <!--end col-->


                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-3 xl:col-span-3">
                        <div class="w-full relative">
                            <h4 class="text-lg font-bold">Showing Previous Product Created</h4>
                            <?php
                            $select_query = "SELECT * FROM `products` ORDER BY id DESC LIMIT 1";

                            $result_query = mysqli_query($con, $select_query);
                            while ($row = mysqli_fetch_assoc($result_query)) {
                                $product_title = $row['product_name'];
                                $product_description = $row['product_description'];
                                $product_image = $row['product_image'];
                                $product_price = $row['product_price'];
                                $product_create = $row['created_at'];
                                $product_update = $row['updated_at'];

                                echo "<div class='flex-auto p-0 md:p-4'>
                                <div>
                                    <img src='./Product Images/$product_image' alt='' class='w-full h-auto'>
                                </div>
                                <div class='mb-5'>
                                    <p class='text-slate-700 text-base dark:text-slate-400'>Product Title</p>
                                    <h4 class='text-xl font-semibold text-slate-700 dark:text-slate-300'>$product_title</h4>
                                </div>
                                <div class='mb-5'>
                                    <p class='text-slate-600 text-base dark:text-slate-400'>Description</p>
                                    <h4 class='text-base font-medium text-slate-900 dark:text-slate-300'>$product_description</h4>
                                </div>
                                <div class='mb-5'>
                                    <p class='text-slate-600 text-base dark:text-slate-400'>Product Date</p>
                                    <h4 class='text-base font-semibold text-slate-900 dark:text-slate-300'>$product_create</h4>
                                </div>
                                <div class='mb-5'>
                                    <p class='text-slate-600 text-base dark:text-slate-400'>Update Date</p>
                                    <h4 class='text-base font-semibold text-slate-900 dark:text-slate-300'>$product_update</h4>
                                </div>
                            </div>";
                            }
                            ?>
                            
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <div class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4  dark:border-slate-700/40">
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
    <script src="assets/libs/lucide/umd/lucide.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>

    <script src="assets/libs/filepond/filepond.min.js"></script>
    <script src="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script src="assets/libs/vanillajs-datepicker/js/datepicker-full.min.js"></script>
    <script src="assets/libs/mobius1-selectr/selectr.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
    <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);
        // Get a reference to the file input element
        const inputElement = document.querySelectorAll('input[type="file"]');

        // Create a FilePond instance
        inputElement.forEach(element => {
            const pond = FilePond.create(element);
        });


        var elem = document.querySelector('input[name="foo"]');
        new Datepicker(elem, {
            // ...options
        });
        new Selectr('#sizing', {
            taggable: true,
            tagSeperators: [",", "|"]
        });
    </script>
</body>

</html>