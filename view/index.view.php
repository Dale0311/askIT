<?php require base_path("view/partials/header.php"); ?>
<div class="w-4/5 mx-auto">
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:gap-8">
        <!-- nav -->
        <?php require base_path("view/partials/nav.php"); ?>
    
        <!-- main -->
        <div class="lg:col-span-2 mt-5 space-y-4">
            <form>
                <div class="flex space-x-2 py-2 border-b border-t">
                    <a href="/notifications" class="block shrink-0">
                        <img alt="Speaker" src="img/user1/1.jpg" class="h-10 w-10 rounded-full object-cover" />
                    </a>
                    <div class="flex flex-col w-full">
                        <textarea name="" id="" class="resize-none pb-4 px-2 overflow-none focus:outline-none focus:border-none text-lg" placeholder="What is happening?!"></textarea>
                        <button type="button" class="self-end py-2 px-8 text-white font-semibold bg-blue-500 rounded-xl border">Ask</button>
                    </div>
                </div>
            </form>
            <!-- decode the comment -->
            <?php foreach ($data as $row):?>
                <article class="rounded-xl border-2 border-gray-100 bg-white hover:bg-gray-100 cursor-pointer">
                    <div class="flex items-start gap-4 p-4 cursor-pointer">
                        <a href="#" class="block shrink-0">
                            <img alt="Speaker" src="<?=$row['profile_pic'] ?>" class="h-10 w-10 rounded-full object-cover" />
                        </a>
                        <div>
                            <a href="#" class="block shrink-0">
                                <p class="text-sm text-gray-500"><span class="font-semibold text-base text-gray-700"><?= $row['firstname']. " " . $row['lastname'] ?></span> <?= $row['at'] ?></p>
                            </a>
                            <p class="line-clamp-2 text-sm text-gray-700">
                                <?= $row['question'] ?>
                            </p>
                            <div class="mt-2 sm:flex sm:items-center sm:gap-2">
                                <div class="flex items-center gap-1 text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                    </svg>
                                    <p class="text-xs"><?= count($row['comments']) ?> comments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <strong class="-mb-[2px] -me-[2px] inline-flex items-center gap-1 rounded-ee-xl rounded-ss-xl bg-green-600 px-3 py-1.5 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="text-[10px] font-medium sm:text-xs">Solved!</span>
                        </strong>
                    </div>
                </article>
            <?php endforeach ?>
        </div>
    
        <!-- side -->
        <div class="mt-5">
            <div class="rounded-xl bg-gray-100 space-y-2">
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