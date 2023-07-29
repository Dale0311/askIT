<div class="flex h-screen flex-col justify-between border-e bg-white inset-y-0 left-0">
    <div class="px-4 py-6">
        <span class="grid h-10 w-32 place-content-center rounded-lg text-xs text-gray-600">
            <img src="/img/logo.png" alt="logo">
        </span>
        <ul class="mt-10 space-y-1 text-lg">
            <li>
                <!-- active: bg-gray-100 text-gray-700
                     !active: text-gray-500
                     hover:bg-gray-100 hover:text-gray-700
                -->
                <a href="/" class="block rounded-lg px-4 py-2 font-medium group <?= $curr_nav == 'index'? 'bg-gray-100 text-gray-700 active': 'text-gray-500 hover:bg-gray-100 hover:text-gray-700' ?>">
                    <i class="fa-<?= $curr_nav == 'index'? 'solid' : 'regular' ?> fa-house"></i> 
                    Home
                </a>
            </li>
            <li>
                <a href="/notifications" class="block rounded-lg px-4 py-2 font-medium group <?= $curr_nav == 'notifications'? 'bg-gray-100 text-gray-700': 'text-gray-500 hover:bg-gray-100 hover:text-gray-700' ?>">
                    <i class="fa-<?= $curr_nav == 'notifications'? 'solid' : 'regular' ?> fa-bell"></i> 
                    Notification
                </a>
            </li>
            <li>
                <a href="/profile" class="block rounded-lg px-4 py-2 font-medium group <?= $curr_nav == 'profile'? 'bg-gray-100 text-gray-700': 'text-gray-500 hover:bg-gray-100 hover:text-gray-700' ?>">
                    <i class="fa-<?= $curr_nav == 'profile'? 'solid' : 'regular' ?> fa-user"></i> 
                    Profile
                </a>
            </li>
            <!-- TBF -->
            <!-- <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                        <span class= font-medium">
                            <i class="fa-regular fa-user"></i> Account 
                        </span>
                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </summary>
                    <ul class="mt-2 space-y-1 px-4">
                        <li>
                            <a href="" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                Details
                            </a>
                        </li>
                        <li>
                            <a href="" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                Security
                            </a>
                        </li>
                        <li>
                            <form action="/logout">
                                <button type="submit" class="w-full rounded-lg px-4 py-2 text-sm font-medium text-gray-500 [text-align:_inherit] hover:bg-gray-100 hover:text-gray-700">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </details>
            </li> -->
        </ul>
    </div>
    <div class="sticky inset-x-0 bottom-0 border-t border-gray-100">
        <a href="#" class="flex items-center gap-2 bg-white p-4 hover:bg-gray-50">
            <img alt="Man" src="/img/user1/profile.jpg" class="h-12 w-12 rounded-full object-cover" />
            <div class="w-full flex items-center justify-between">
                <p class="text-lg flex flex-col justify-center">
                    <strong class="block font-medium">Dale Cabarle</strong>
                    <span class="text-sm"> @Arteezy_King </span>
                </p>
                <p class="font-bold text-gray-700">
                    ...
                </p>
            </div>
        </a>
    </div>
</div>
