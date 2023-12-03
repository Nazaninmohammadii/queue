<nav class="bg-black py-2">
    <div class="max-w-8xl mx-auto px-8">
        <div class="flex justify-between items-center">

            <!-- Left content (Desktop Logo) -->
            <div class="hidden md:flex items-center space-x-4">
                <div class="mr-4">
                    <a href="index.php" class="flex py-4 px-2 text-gray-700">
                        <img src="img/logo.svg" class="h-10 w-10 mr-2">
                    </a>
                </div>
            </div>

            <!-- Right content (Desktop Navigation) -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="about.php" class="py-4 px-3 text-white hover:text-gray-400">About</a>
                <a href="tickets.php" class="py-4 px-3 text-white hover:text-gray-400">Tickets</a>

                <!-- Shopping cart icon -->
                <div class="flex items-center space-x-1">
                    <svg class="w-8 h-8 hover:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                </div>
            </div>

            <!-- Mobile button goes here -->
            <div class="md:hidden flex items-center space-x-12">
                <!-- Hamburger menu button -->
                <button class="mobile-menu-button">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <!-- Logo for mobile -->
                <a href="index.php" class="flex py-4 px-2 text-gray-700">
                    <img src="img/logo.svg" class="h-10 w-10 mr-2">
                </a>
                
                <!-- Shopping cart icon for mobile -->
                <div class="md:hidden flex items-center space-x-4">
                    <svg class="w-8 h-8 hover:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="mobile-menu hidden md:hidden absolute w-full z-2 bg-black text-center">
        <!-- <a href="#" class="block py-2 px-4 text-lg hover:text-gray-400">Home</a> -->
        <a href="about.php" class="block py-2 px-4 text-lg hover:text-gray-400">About</a>
        <a href="tickets.php" class="block py-2 px-4 text-lg hover:text-gray-400">Tickets</a>
    </div>
</nav>
