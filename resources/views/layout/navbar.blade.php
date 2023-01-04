<!--- ======= Starting NavBar Here --- ===== --->

<header
    x-data="{NavBarOpen: false}" class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md dark:bg-slate-900 h-24">

    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="pr-4 w-60 max-w-full">
                <a href="" class="w-full flex items-center py-2">
                    <img
                        src="{{ url('/img/logo.png')}}"
                        alt="logo"
                        class="w-[130px] lg:w=-[150px] inline-block dark:hidden"
                    />
                    <img
                        src="{{ url('/img/logo-white.png')}}"
                        alt="logo"
                        class="w-[130px] lg:w=-[150px] hidden dark:inline-block"
                    />
                </a>
            </div>
            <div class="flex px-4 justify-end items-center w-full">
                <div>
                    <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen" x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-layout.navbar-hamburger>
                    
                    <!--NavBar-->
                    <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse" class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:right-4 lg:block lg:static lg:shadow-none">

                        <!--List Items-->
                        <ul class="block lg:flex lg:items-left">
                            <li id="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 3.75L22.76 12.03C23.54 12.4 24 13.17 24 13.97V14.47C24 15.26 23.54 16.03 22.76 16.41L12 24.19L1.24 16.41C0.46 16.03 0 15.26 0 14.47V13.97C0 13.17 0.46 12.4 1.24 12.03L12 3.75M21.25 12L12 3.75L2.75 12L12 20.25L21.25 12M12 13.5A1.5 1.5 0 1 1 13.5 12A1.5 1.5 0 0 1 12 13.5Z" fill="#fff"/></svg></li>
                        </ul>
                        <ul class="block lg:flex lg:items-center">
                            @foreach($navigationItems as $items)
                                <x-layout.navbar-item :href="$items['href']">{{ $items['Label'] }}</x-layout.navbar-item>
                            @endforeach
                        </ul>
                    </nav>


                </div>
            </div>
        </div>
    </div>
</header>
<!--- ======= Ending NavBar Here --- ===== --->
