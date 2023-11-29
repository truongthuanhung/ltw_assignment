<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700;900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/f776702b05.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <div id="main">
        <div class="header flex justify-between lg:px-[60px] px-[34px] bg-[#f2f2f2] fixed top-0 left-0 right-0 z-50">
            <div class="header__logo order-2 lg:order-1">
                <img src="../images/logo.svg" alt="">
            </div>
            <div class="header__navbar flex items-center order-1 lg:order-2 lg:mr-auto lg:ml-[62px]">
                <i class="header__navbar-icon lg:hidden fa-solid fa-bars text-3xl"></i>
                <div
                    class="header__navbar-container custom-hidden flex flex-col absolute top-[65px] left-0 right-0 items-start lg:static lg:flex-row lg:items-center bg-white lg:bg-[#f2f2f2]">
                    <div
                        class="lg:hidden header__search-container header__navbar-item w-full md:px-[25px] px-[18px] py-[10px] relative">
                        <form action="">
                            <input type="text" id="search-info"
                                class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 pl-2.5 pr-12"
                                placeholder="Search..." required>
                            <div class="header__search text-2xl px-4 absolute bottom-1/2 translate-y-1/2 right-[2%]">
                                <button type="submit" class="px-2 py-1"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="header__navbar-item w-full"><a href="../index.php"
                            class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">Home</a>
                    </div>
                    <div class="header__navbar-item w-full"><a href="#"
                            class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">Products</a>
                    </div>
                    <div class="header__navbar-item w-full"><a href="./News.php"
                            class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">News</a>
                    </div>
                    <div class="header__navbar-item w-full"><a href="./About.php"
                            class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">About</a>
                    </div>
                </div>
            </div>
            <div
                class="header__lg-search hidden lg:block text-2xl px-4 py-[10px] cursor-pointer order-3 relative min-w-[25%]">
                <i class="fa-solid fa-magnifying-glass absolute bottom-1/2 translate-y-1/2 right-[10%]"></i>
                <div class="header__lg-search">
                    <form action="">
                        <input type="text" id="search-info"
                            class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 pl-2.5 pr-12"
                            placeholder="Search..." required>
                    </form>
                </div>
            </div>
            <div class="header__icon flex items-center order-4">
                <div class="header__cart text-2xl px-4 py-[16.5px] cursor-pointer">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div class="header__user text-2xl px-4 py-[16.5px] cursor-pointer">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
        </div>
        <div class="order-detail-container lg:px-[100px] px-[20px] py-[50px] mt-[95px]">
            <div class="flex flex-row flex-start items-center gap-[10px] mb-[50px]">
                <i class="fa-solid fa-chevron-left cursor-pointer block"></i>
                <p class="text-base underline underline-offset-4"><a href="./Product.php">Back to Order Management</a></p>
            </div>
            <div class="order-detail bg-[#F2F2F2] w-full p-[30px] rounded-xl">
                <strong class="text-2xl">Order ID: LA-0234</strong><br><br>
                <div class="flex">
                        <div class="w-1/2 text-left">
                            <p class="pb-[10px]">Username</p>
                            <p class="pb-[10px]">Name</p>
                            <p class="pb-[10px]">Email</p>
                            <p class="pb-[10px]">Country</p>
                            <p class="pb-[10px]">State/Province</p>
                            <p class="pb-[10px]">City</p>
                            <p class="pb-[10px]">Zip code</p>
                            <p class="pb-[10px]">Address</p>
                            <p class="pb-[10px]">Phone number</p>
                            <p class="pb-[10px]">Created At</p>
                            <p class="pb-[10px]">Status</p>
                        </div>
                        <div class="w-1/2 text-right">
                            <p class="pb-[10px]">davidhung</p>
                            <p class="pb-[10px]">Hung Truong</p>
                            <p class="pb-[10px]">abc@gmail.com</p>
                            <p class="pb-[10px]">USA</p>
                            <p class="pb-[10px]">Texas</p>
                            <p class="pb-[10px]">Houstan</p>
                            <p class="pb-[10px]">01234567</p>
                            <p class="pb-[10px]">123/45 David</p>
                            <p class="pb-[10px]">0123456789</p>
                            <p class="pb-[10px]">25 Oct 2023</p>
                            <select name="edit-status" id="edit-status" class="pb-[10px] border-black border-2 rounded bg-[#F2F2F2]">
                                <option value="Shipping">Shipping</option>
                                <option value="Ordered">Ordered</option>
                                <option value="Rejected">Rejected</option>

                            </select>
                        </div>
                    </div>
                    <br>
                    <hr class="border-b border-solid border-black mb-[20px]" />
                    <div class="lg:flex">
                        <div class="w-full">
                            <div class="cart-item">
                                <div class="flex mb-[30px]">
                                    <div class="w-1/5">
                                        <img src="../../images/puma.png" alt="">
                                    </div>
                                    <div class="w-3/5 pl-[20px]">
                                        <p class="font-semibold text-lg mb-[10px]">Puma Men's Caven Sneaker</p>
                                        <ul class="list-disc ml-[20px]">
                                            <li>Colour: PUMA WHITE/PUMA BLACK</li>
                                            <li>Size: 8 Medium</li>
                                            <li>Quantity: 1</li>
                                        </ul>
                                    </div>
                                    <div class="w-1/5">
                                        <div class="price text-right">
                                            <p class="font-semibold">$79.99</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item">
                                <div class="flex mb-[30px]">
                                    <div class="w-1/5">
                                        <img src="../../images/puma.png" alt="">
                                    </div>
                                    <div class="w-3/5 pl-[20px]">
                                        <p class="font-semibold text-lg mb-[10px]">Puma Men's Caven Sneaker</p>
                                        <ul class="list-disc ml-[20px]">
                                            <li>Colour: PUMA WHITE/PUMA BLACK</li>
                                            <li>Size: 8 Medium</li>
                                            <li>Quantity: 1</li>
                                        </ul>
                                    </div>
                                    <div class="w-1/5">
                                        <div class="price text-right">
                                            <p class="font-semibold">$79.99</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item">
                                <div class="flex mb-[30px]">
                                    <div class="w-1/5">
                                        <img src="../../images/puma.png" alt="">
                                    </div>
                                    <div class="w-3/5 pl-[20px]">
                                        <p class="font-semibold text-lg mb-[10px]">Puma Men's Caven Sneaker</p>
                                        <ul class="list-disc ml-[20px]">
                                            <li>Colour: PUMA WHITE/PUMA BLACK</li>
                                            <li>Size: 8 Medium</li>
                                            <li>Quantity: 1</li>
                                        </ul>
                                    </div>
                                    <div class="w-1/5">
                                        <div class="price text-right">
                                            <p class="font-semibold">$79.99</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="border-b border-solid border-black mb-[20px]" />
                    <div class="flex">
                        <div class="w-1/2 text-left">
                            <p class="pb-[10px]">Delivery</p>
                            <p class="pb-[10px]">Subtotal</p>
                            <p class="pb-[10px]">Extimated Tax</p>
                            <p class="pb-[10px]">Shipping</p>
                        </div>
                        <div class="w-1/2 text-right">
                            <p class="pb-[10px]">Nov 10-Nov 25</p>
                            <p class="pb-[10px]">$239.97</p>
                            <p class="pb-[10px]">$0.00</p>
                            <p class="pb-[10px]">$0.00</p>
                        </div>
                    </div>
                    <hr class="border-b border-solid border-black" />
                    <div class="flex py-[30px]">
                        <div class="w-1/2 text-left">
                            <p class="font-semibold text-lg">Total</p>
                        </div>
                        <div class="w-1/2 text-right">
                            <p class="font-semibold text-lg">$239.97</p>
                        </div>
                    </div>
                    <p>Please double-check your order details. Orders cannot be modified once submitted.</p>
                </div>
                <form action="" class="mt-[5px] text-2xl float-right p-[20px]">
                    <button class="">
                            <i class="fa-solid fa-trash" style="color: #000000;"></i>
                    </button>
                </form>
                <br><br><br>
        </div>
        
        <div class="footer bg-[#f2f2f2]">
            <div
                class="flex flex-row flex-wrap lg:flex-nowrap lg:py-[24px] lg:px-[193px] md:px-[200px] items-start lg:gap-[82px]  px-[50px] py-[50px]">
                <div class="w-1/2 md:w-1/3">
                    <p class="text-base font-semibold py-1">Company</p>
                    <p class="py-1"><a href="#" class="text-base">About Us</a></p>
                    <p class="py-1"><a href="#" class="text-base">Blog</a></p>
                    <p class="py-1"><a href="#" class="text-base">We're hiring</a></p>
                    <p class="py-1"><a href="#" class="text-base">Contact Us</a></p>
                </div>
                <div class="w-1/2 md:w-1/3">
                    <p class="text-base font-semibold py-1">Social</p>
                    <p class="py-1"><a href="#" class="text-base">Twitter</a></p>
                    <p class="py-1"><a href="#" class="text-base">Youtube</a></p>
                    <p class="py-1"><a href="#" class="text-base">Facebook</a></p>
                </div>
                <div class="w-full md:w-1/3 mt-[45px] md:mt-0">
                    <p class="text-base font-semibold py-1 ">Community</p>
                    <p class="py-1"><a href="#" class="text-base">Forums</a></p>
                    <p class="py-1"><a href="#" class="text-base">Support</a></p>
                    <p class="py-1"><a href="#" class="text-base">Documentation</a></p>
                </div>
                <div class="md:w-full mt-[45px] md:mt-[60px] lg:mt-0">
                    <p class="text-base font-semibold py-1">Sign Up For Email & Get 50 Points!</p>
                    <p class="py-1">Offer delivered within 4 days after signup.</p>
                    <div class="py-1">
                        <form action="">
                            <input type="text" id="small-input"
                                class="block w-full p-2 text-black border border-gray-300 rounded-lg bg-gray-50 sm:text-xs">
                            <button type="submit" id="add-btn"
                                class="text-white bg-[#0F6CBD] hover:bg-blue-800 font-medium rounded-md text-sm w-full sm:w-auto px-5 py-2.5 text-center mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../script/header.js"></script>
</body>

</html>