<div x-data="{ open:false, sidebarOpen:false }">
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">

        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">

                <!-- LEFT -->
                <div class="flex items-center justify-start">

                    <!-- sidebarOpen toggle -->
                    <button @click="sidebarOpen = !sidebarOpen"
                            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100">
                        <svg x-show="!sidebarOpen" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 012 15.25zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"/>
                        </svg>

                        <span x-show="sidebarOpen">✕</span>
                    </button>

                    <!-- Logo -->
                    <a href="{{ url('/dashboard/home') }}" class="flex ms-2 md:me-24">
                        <img src="{{ asset('assets/icons/bongasms-logo.png') }}"
                             class="h-10"
                             alt="BongaSMS logo">
                    </a>
                </div>

                <!-- RIGHT -->
                <div class="flex items-center space-x-4">

                    <!-- Notification -->
                    <button class="text-gray-500 border border-gray-500 hover:bg-primary hover:text-white rounded-lg text-sm p-2.5">
                        🔔
                    </button>

                    <!-- User dropdown -->
                    <div class="relative">
                        <button @click="open=!open">
                            <img class="w-10 h-10 rounded-full"
                                 src="https://flowbite.com/docs/images/people/profile-picture-5.jpg">
                        </button>

                        <!-- Dropdown -->
                        <div x-show="open" @click.outside="open=false"
                             class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow">

                            <div class="px-4 py-2 text-sm font-semibold border-b">
                                My Account
                            </div>

                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a>

                            <a href="{{ url('/dashboard/clients') }}"
                               class="block px-4 py-2 hover:bg-gray-100">
                                Clients
                            </a>

                            <a href="{{ url('/dashboard/settings/services') }}"
                               class="block px-4 py-2 hover:bg-gray-100">
                                Services
                            </a>

                            <a href="{{ url('/dashboard/developerhub') }}"
                               class="block px-4 py-2 hover:bg-gray-100">
                                Developer Hub
                            </a>

                            <a href="{{ url('/dashboard/logout') }}"
                               class="block px-4 py-2 text-red-600 hover:bg-gray-100">
                                Log out
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>

    <aside
        x-data="{ activeDropdown: null }"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full sm:translate-x-0'"
        class="fixed top-0 left-0 z-40 w-72 h-screen pt-20 transition-transform bg-white border-r border-gray-200"
    >

        <div class="flex flex-col h-full px-3 pb-4 overflow-y-auto">

            <ul class="space-y-2 font-medium">

                <!-- Dashboard -->
                <x-layout.link href="/dashboard/home">Dashboard</x-layout.link>

                <!-- Survey dropdown -->
                <x-layout.sidebar-dropdown title="Survey">
                    <a href="/dashboard/survey/questions" class="block hover:text-primary">Survey Questions</a>
                    <a href="/dashboard/survey/response" class="block hover:text-primary">Survey Responses</a>
                    <a href="/dashboard/survey/open-ai-survey" class="block hover:text-primary">AI Survey</a>
                </x-layout.sidebar-dropdown>

                <!-- Phonebook dropdown -->
                <x-layout.sidebar-dropdown title="Phonebook">
                    <a href="/dashboard/phonebook/contactgroups" class="block hover:text-primary">Contact Groups</a>
                    <a href="/dashboard/phonebook/contacts" class="block hover:text-primary">Contacts</a>
                    <a href="/dashboard/phonebook/contactgroupmaps" class="block hover:text-primary">Contact Group Maps</a>
                </x-layout.sidebar-dropdown>

            </ul>

            <!-- FOOTER -->
            <ul class="mt-auto space-y-2">

                <x-layout.sidebar-dropdown title="Settings">
                    <a href="/dashboard/settings/transactiontags" class="block hover:text-primary">Transaction Tags</a>
                    <a href="/dashboard/settings/networks" class="block hover:text-primary">Networks</a>
                    <a href="/dashboard/settings/services" class="block hover:text-primary">Services</a>
                </x-layout.sidebar-dropdown>

                <x-layout.link href="/dashboard/developerhub">Developer Hub</x-layout.link>
                <x-layout.link href="/dashboard/logout">Logout</x-layout.link>

            </ul>

        </div>
    </aside>


</div>
