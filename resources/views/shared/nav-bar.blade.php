<nav class="bg-gray-900 flex justify-between items-center ">
    <!-- Logo -->
    <div class="flex-shrink-0 m-10">
        <img src="LOGO.png" alt="Logo" class="h-50 w-auto">
    </div>

    <!-- Links -->
    <div class="hidden md:block flex justify-between items-center max-w-7xl mx-auto ">
        <ul class="space-x-8 text-white flex justify-between items-center font-poppins">
            <li><a href="{{ route('home') }}" class="font-bold hover:text-gray-300">Home</a></li>
            <li><a href="{{ route('services') }}" class="font-bold hover:text-gray-300">Services</a></li>
            <li><a href="#" class="font-bold hover:text-gray-300">About Us</a></li>
            <li><a href="#" class="font-bold hover:text-gray-300">Portfolio</a></li>
        </ul>

    </div>

    <!-- Buttons -->
    <div class="m-10">
        @guest
            <a href="{{ route('register') }}" class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 transform bg-transparent border border-white rounded hover:bg-white hover:text-black hover:border-transparent focus:outline-none">
                Register
            </a>

            <a href="{{ route('login') }}" aria-label="" class="inline-flex items-center justify-center h-12 px-6 gap-1 border border-solid border-white rounded font-semibold text-gray-800 transition-colors duration-200 transform hover:scale-105 text-deep-purple-accent-700 bg-transparent text-white hover:bg-white hover:text-black hover:border-transparent focus:outline-none">
    <span>
        Login
    </span>
                <ion-icon class="text-xl" name="arrow-forward-outline"></ion-icon>
            </a>

        @else
            <!-- If user is logged in, show profile button -->
            <div class="m-10">
                <a href="#" class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 transform bg-transparent border border-white rounded hover:bg-white hover:text-black hover:border-transparent focus:outline-none">Profile</a>
                <a href="{{route('logout')}}" class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 transform bg-transparent border border-white rounded hover:bg-white hover:text-black hover:border-transparent focus:outline-none">
                    <form action="{{ 'logout' }}" method="POST" class="icon">
                        @csrf
                        <button type="submit">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </button>
                    </form>
                    <span class="title">Sign Out</span>
                </a>
            </div>
        @endguest
    </div>
</nav>
