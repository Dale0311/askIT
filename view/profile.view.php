<?php require base_path("view/partials/header.php"); ?>
<div class="w-4/5 mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-4">
        <!-- nav -->
        <?php require base_path("view/partials/nav.php"); ?>
    
        <!-- main -->
        <div class="lg:col-span-2 mt-5 space-y-4">
            <!-- profile section -->
            <div>
                <div class="flex space-x-4 my-2">
                    <a href="/" class="hover:rounded-full hover:bg-gray-100 py-2 px-4 self-center mx-2"> <i class="fa-solid fa-arrow-left"></i> </a>
                    <div>
                        <p class="font-bold">
                            Albert Dale Cabarle
                        </p>
                        <p class="text-gray-500 text-sm">
                            2 Questions
                        </p>
                    </div>
                </div>
                <!-- bg -->
                <div class="overflow-hidden rounded-lg bg-cover bg-center bg-no-repeat z-10" style="background-image: url(img/user1/bg.jpg); height: 200px; ">
                </div>
                <div class="relative text-gray-500 space-y-2 px-4">
                    <!-- profile -->
                    <a href="/profile" class="block shrink-0 absolute left-8 top-[-80px]">
                        <img alt="Speaker" src="img/user1/1.jpg" class="h-28 w-28 rounded-full object-cover border-4 border-white" />
                    </a>
                    <!-- edit profile -->
                    <div class="flex justify-end">
                        <a href="" class="border rounded-xl py-2 px-8 font-semibold hover:bg-gray-100">Edit Profile</a>
                    </div>
                    <!-- name -->
                    <div class="leading-[10px]">
                        <p class="text-lg font-bold text-black">Albert Dale Cabarle</p>
                        <p>@Arteezy_king</p>
                    </div>
                    <div>
                        <i class="fa-regular fa-calendar"></i> Joined November 19 2019
                    </div>
                    <div class="flex space-x-2">
                        <p><span class="font-semibold text-black">114</span> followers</p>
                        <p><span class="font-semibold text-black">20</span> following</p>
                    </div>
                </div>
            </div>
            <div class="border-t pt-5">

                <article href="question" class="rounded-xl border-2 border-gray-100 bg-white hover:bg-gray-100 cursor-pointer relative">
                    <div class="flex justify-end absolute right-0">
                        <strong class="-mb-[2px] -me-[2px] inline-flex items-center gap-1 rounded-bl-xl bg-green-600 px-3 py-1.5 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="text-[10px] font-medium sm:text-xs">Solved!</span>
                        </strong>
                    </div>
                    <div class="flex items-start gap-4 p-4 cursor-pointer relative">
                        <a href="/question?id=1" class="absolute inset-0 z-0">
                    
                        </a>
                        <a href="#" class="block shrink-0 z-20">
                            <img alt="Speaker" src="img/user1/1.jpg" class="h-10 w-10 rounded-full object-cover " />
                        </a>
                        <div>
                            
                            <a href="#" class="block shrink-0 border border-red-500">
                                <p class="text-sm text-gray-500"><span class="font-semibold text-base text-gray-700">Albert Dale Cabarle</span> @Arteezy_king</p>
                            </a>
                            <p class="line-clamp-2 text-sm text-gray-700">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime asperiores minima eius dignissimos blanditiis eos, amet ratione consectetur aperiam consequatur nobis praesentium deserunt veniam, ut quibusdam cumque? Voluptatum, debitis quae.
                            </p>
                            <div class="mt-2 sm:flex sm:items-center sm:gap-2">
                                <div class="flex items-center gap-1 text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                    </svg>
                                    <p class="text-xs">14 comments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </article>
            </div>
            <!-- questions section -->
        </div>
    
        <!-- side -->
        <div class="border-l">
            <div class="rounded-xl bg-gray-100 space-y-2 m-4">
                <h1 class="font-bold text-lg p-4">Trending Questions</h1>
                <!-- Trending -->
                <div class="">
                    <a href="/" class="block px-4 py-2 font-medium group hover:bg-gray-200">
                        <p class="text-[10px] text-gray-500">Programming Language</p>
                        <h1 class="font-bold">React</h1>
                        <p class="text-[10px] text-gray-500">1,400 Questions</p>
                    </a>
                    <a href="/" class="block px-4 py-2 font-medium group hover:bg-gray-200">
                        <p class="text-[10px] text-gray-500">UX App</p>
                        <h1 class="font-bold">Figma</h1>
                        <p class="text-[10px] text-gray-500">280 Questions</p>
                    </a>
                    <a href="/" class="block px-4 py-2 font-medium group hover:rounded-b-xl hover:bg-gray-200">
                        <p class="text-[10px] text-gray-500">School</p>
                        <h1 class="font-bold">LET Exam</h1>
                        <p class="text-[10px] text-gray-500">118 Questions</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require base_path("view/partials/footer.php"); ?>