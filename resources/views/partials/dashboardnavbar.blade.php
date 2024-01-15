<header class="py-8 px-6">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="container my-0 mx-auto transition-all duration-200">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-16">
                    <a class="hover:text-[#eb4432] text-base font-bold uppercase transition-colors duration-200"
                        href="{{ route('home') }}">
                        Home
                    </a>
                    <a class="hover:text-[#eb4432] text-base font-bold uppercase transition-colors duration-200"
                        href="{{ route('dashboard') }}">
                        DashBoard
                    </a>
                </div>

                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="text-white relative hover:text-[#eb4432] transition-colors duration-200  font-medium rounded-lg text-base px-5 py-2.5 text-center inline-flex items-center"
                    type="button">{{ Auth::user()->name }} <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                    <div id="dropdown"
                        class="z-10 divide-y hidden text-xs  absolute bottom-[-130px] left-[-10px] divide-gray-100 rounded-lg shadow w-28 md:w-36 bg-gray-700">
                        <div class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton">
                            <a href="{{ route('profile.edit') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>

                            <input type="submit" value="Sign out"
                                class="block cursor-pointer w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        </div>

                    </div>
                </button>
            </div>
        </div>
    </form>
</header>
<script async>
    const dropDownButton = document.getElementById('dropdownDefaultButton');
    const dropDown = document.getElementById('dropdown');
    let isDropDownOpened = false;

    dropDownButton.addEventListener('click', () => {
        if (!isDropDownOpened) {
            dropDown.classList.remove('hidden')
            isDropDownOpened = true;
        } else {
            dropDown.classList.add('hidden')
            isDropDownOpened = false;
        }
    })

    dropDown.addEventListener('mouseleave', () => {
        const timer = setTimeout(() => {
            dropDown.classList.add('hidden')
            isDropDownOpened = false;
        }, 500);
    })
</script>
