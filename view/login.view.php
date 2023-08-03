<?php require base_path("view/partials/header.php"); ?>
<div class="flex w-1/2 mx-auto mt-5">
    <div class="w-1/2">
        <div class="w-1/2 mx-auto mt-10 p-4 w-full">
            <img src="/img/logo.png" alt="" class="w-2/3">
            <div class="mt-10">
                <ul class="space-y-1 text-gray-500 list-inside dark:text-gray-400 text-lg font-semibold">
                    <li class="flex items-center space-x-2">
                        <i class="fa-solid fa-circle-check" style="color: #4F46E5;"></i>
                        <p>Connect to millions of users </p>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="fa-solid fa-circle-check" style="color: #4F46E5;"></i>
                        <p>Ask questions anytime</p>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="fa-solid fa-circle-check" style="color: #4F46E5;"></i>
                        <p>Share your thoughts across the platform</p>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="fa-solid fa-circle-check" style="color: #4F46E5;"></i>
                        <p>Build your friends</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8 w-1/2">
        <div class="mx-auto max-w-lg">
            <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">
                Welcome Back!
            </h1>

            <form action="" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                <p class="text-center text-lg font-medium">Sign in to your account</p>

                <div>
                    <label for="email" class="sr-only">Email</label>

                    <div class="relative">
                        <input type="email" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Enter email" required />

                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>

                    <div class="relative">
                        <input type="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Enter password" required />

                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </span>
                    </div>
                </div>

                <button type="submit" class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                    Sign in
                </button>

                <p class="text-center text-sm text-gray-500">
                    No account?
                    <a class="underline" href="/register">Sign up</a>
                </p>
            </form>
        </div>
    </div>
</div>
<?php require base_path("view/partials/footer.php"); ?>