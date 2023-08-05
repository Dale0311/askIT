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
                            <?= $user_data['firstname'] . " " . $user_data['lastname'] ?>
                        </p>
                        <?php if (count($data)) : ?>
                            <p class="text-gray-500 text-sm">
                                <?= count($data) ?> <?= count($data) > 1 ? "Questions" : "Question" ?>
                            </p>
                        <?php endif ?>
                    </div>
                </div>
                <!-- bg -->
                <div class="overflow-hidden rounded-lg bg-cover bg-center bg-no-repeat " style="background-image: url(img/user1/bg.jpg); height: 200px; ">
                </div>
                <div class="relative text-gray-500 space-y-2 px-4">
                    <!-- profile -->
                    <a href="/profile" class="block shrink-0 absolute left-8 top-[-80px]">
                        <img alt="Speaker" src="<?= $user_data['profile_pic']?? "/img/default.jpg" ?>" class="h-28 w-28 rounded-full object-cover border-4 border-white" />
                    </a>
                    <!-- edit profile -->
                    <div class="flex justify-end">
                        <a href="" class="border rounded-xl py-2 px-8 font-semibold hover:bg-gray-100">Edit Profile</a>
                    </div>
                    <!-- name -->
                    <div class="leading-[10px]">
                        <p class="text-lg font-bold text-black"><?= $user_data['firstname']. " " . $user_data['lastname'] ?></p>
                        <p><?= $user_data['at'] ?> </p>
                    </div>
                    <div>
                        <i class="fa-regular fa-calendar"></i> Joined <?= dateFormatter($user_data['joined_date']) ?>
                    </div>
                    <div class="flex space-x-2">
                        <p><span class="font-semibold text-black">114</span> followers</p>
                        <p><span class="font-semibold text-black">20</span> following</p>
                    </div>
                </div>
            </div>
            <form method="post" action="profile/questions">
                <div class="flex space-x-2 p-2 border-t">
                    <input type="hidden" name="user_id" value="<?= $user_data['user_id'] ?>">
                    <a href="/notifications" class="block shrink-0">
                        <img alt="Speaker" src="<?= $user_data['profile_pic']?? "/img/default.jpg" ?>" class="h-10 w-10 rounded-full object-cover" />
                    </a>
                    <div class="flex flex-col w-full">
                        <textarea name="question" id="" class="resize-none px-2 overflow-none focus:outline-none focus:border-none text-lg border-none active:border-red-500" placeholder="What is happening?!"></textarea>
                        <button type="submit" class="self-end py-2 px-8 text-white font-semibold bg-blue-500 rounded-xl border mt-2">Ask</button>
                    </div>
                </div>
            </form>
            <!-- questions section -->
            <div class="border-t w-full">
                <div class="flex p-4 items-center">
                    <?php if (count($data)) : ?>
                        <p class="text-xl font-bold">
                            <?= count($data) > 1 ? "Questions" : "Question" ?>
                        </p>
                    <?php endif ?>
                </div>
                <?php foreach ($data as $row) : ?>
                    <article class="border border-gray-100 bg-white hover:bg-gray-100 cursor-pointer text-left relative">
                        <a href="/profile/questions?id=<?= $row['id'] ?>" class="absolute inset-0 "></a>
                        <div class="flex items-start gap-4 p-4 cursor-pointer">
                            <a href="/profile" class="block shrink-0 z-10">
                                <img alt="Speaker" src="<?= $row['profile_pic']?? "/img/default.jpg" ?>" class="h-10 w-10 rounded-full object-cover" />
                            </a>
                            <div>
                                <a href="/profile" class="inline-block shrink-0 z-30">
                                    <p class="text-sm text-gray-500"><span class="font-semibold text-base text-gray-700"><?= $row['firstname'] . " " . $row['lastname'] ?></span> <?= $row['at'] ?></p>
                                </a>
                                <p class="line-clamp-2 text-sm text-gray-700">
                                    <?= $row['question'] ?>
                                </p>
                                <div class="mt-2 sm:flex sm:items-center sm:gap-2">
                                    <div class="flex items-center gap-1 text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                        </svg>

                                        <!-- 0 = no, <2 = comment, >1 = comments -->
                                        <p class="text-xs"><?= count($row['comments']?? []) > 0 ? count($row['comments']) : "no" ?> <?= count($row['comments']?? []) < 2 ? "comment" : "comments" ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endforeach ?>
            </div>
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