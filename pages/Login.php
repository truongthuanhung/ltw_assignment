<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/f776702b05.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <div id="main">
        <div class="sign flex flex-row h-[30px] fixed top-0 left-0 right-0 z-50 items-center md:px-[20px] px-[10px] justify-between bg-[#f2f2f2] text-sm">
            <p class="block">Free shipping on orders above $200 (US only)</p>
            <p class="hidden md:ml-auto md:mr-[56px] mr-[10px]"><a href="./pages/Account.php">User1234</a></p>
            <p class="cursor-pointer hidden"><a href="#">Log out</a></p>
            <p class="cursor-pointer"><a href="../pages/Login.php">Log in</a></p>
        </div>
        <div class="header flex justify-between lg:px-[60px] px-[34px] bg-[#f2f2f2] fixed top-[30px] left-0 right-0 z-50">
            <div class="header__logo order-2 lg:order-1">
                <img src="../images/logo.svg" alt="">
            </div>
            <div class="header__navbar flex items-center order-1 lg:order-2 lg:mr-auto lg:ml-[62px]">
                <i class="header__navbar-icon lg:hidden fa-solid fa-bars text-3xl"></i>
                <div class="header__navbar-container custom-hidden flex flex-col absolute top-[65px] left-0 right-0 items-start lg:static lg:flex-row lg:items-center bg-white lg:bg-[#f2f2f2]">
                    <div class="lg:hidden header__search-container header__navbar-item w-full md:px-[25px] px-[18px] py-[10px] relative">
                        <form action="">
                            <input type="text" id="search-info" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 pl-2.5 pr-12" placeholder="Search..." required>
                            <div class="header__search text-2xl px-4 absolute bottom-1/2 translate-y-1/2 right-[2%]">
                                <button type="submit" class="px-2 py-1"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="header__navbar-item w-full"><a href="../index.php" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">Home</a>
                    </div>
                    <div class="header__navbar-item w-full"><a href="./Product.php" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">Products</a>
                    </div>
                    <div class="header__navbar-item w-full"><a href="../pages/OrderHistory.php" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">History</a>
                    </div>
                    <div class="header__navbar-item w-full"><a href="./News.php" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">News</a>
                    </div>
                    <div class="header__navbar-item w-full"><a href="./About.php" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">About</a>
                    </div>
                </div>
            </div>
            <div class="header__lg-search hidden lg:block text-2xl px-4 py-[10px] cursor-pointer order-3 relative min-w-[25%]">
                <i class="fa-solid fa-magnifying-glass absolute bottom-1/2 translate-y-1/2 right-[10%]"></i>
                <div class="header__lg-search">
                    <form action="">
                        <input type="text" id="search-info" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 pl-2.5 pr-12" placeholder="Search..." required>
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
        <div class="lg:px-[220px] md:px-[80px] px-[20px] py-[50px] mt-[95px]">
            <div class="flex flex-col">
                <h2 class="lg:text-2xl font-semibold mb-[12px]">Sign in</h2>
                <div class="w-full md:w-[300px]">
                    <form action="">
                        <div>
                            <label for="email" class="block mb-[12px] text-base font-medium text-black">Email</label>
                            <input type="email" id="email" class="block w-full p-2 text-black border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="password" class="block my-[12px] text-base font-medium text-black">Password</label>
                            <input type="password" id="password" class="block w-full p-2 text-black border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-2.5 mt-2.5 focus:outline-none">Sign
                            in</button>
                    </form>

                </div>
            </div>
            <div class="flex flex-col mt-[90px]">
                <h2 class="lg:text-2xl font-semibold mb-[12px]">Don't have an account? Sign up instead</h2>
                <div class="w-full md:w-[300px]">
                    <form action="">
                        <div>
                            <label for="register-name" class="block mb-[12px] text-base font-medium text-black">Name</label>
                            <input type="text" id="register-name" class="block w-full p-2 text-black border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="register-email" class="block my-[12px] text-base font-medium text-black">Email</label>
                            <input type="email" id="register-email" class="block w-full p-2 text-black border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="register-password" class="block my-[12px] text-base font-medium text-black">Password</label>
                            <input type="password" id="register-password" class="block w-full p-2 text-black border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <p class="text-sm mt-2.5">At least 12 characters long, and must contain an alphabetical
                            character.</p>
                        <div>
                            <label for="register-password-confirm" class="block my-[12px] text-base font-medium text-black">Password
                                confirmation</label>
                            <input type="password" id="register-password-confirm" class="block w-full p-2 text-black border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <p class="text-sm mt-2.5">By creating an account you are agreeing to <span class="underline">Terms
                                of Service </span>and <span class="underline">Privacy Policy</span></p>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-2.5 mt-2.5 focus:outline-none">Sign
                            up</button>
                    </form>

                </div>
            </div>
            <div class="flex flex-col mt-[90px]">
                <h2 class="lg:text-2xl font-semibold mb-[12px]">Forgot password?</h2>
                <p class="text-sm mb-2.5">Type your email to get started.</p>
                <div class="w-full md:w-[300px]">
                    <form action="">
                        <div>
                            <input type="email" id="email-forgot" class="block w-full p-2 text-black border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-2.5 mt-2.5 focus:outline-none">Submit</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="footer bg-[#f2f2f2]">
            <div class="flex flex-row flex-wrap lg:flex-nowrap lg:py-[24px] lg:px-[193px] md:px-[200px] items-start lg:gap-[82px]  px-[50px] py-[50px]">
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
                            <input type="text" id="small-input" class="block w-full p-2 text-black border border-gray-300 rounded-lg bg-gray-50 sm:text-xs">
                            <button type="submit" id="add-btn" class="text-white bg-[#0F6CBD] hover:bg-blue-800 font-medium rounded-md text-sm w-full sm:w-auto px-5 py-2.5 text-center mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../script/header.js"></script>
</body>

</html>