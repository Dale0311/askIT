<?php require base_path("view/partials/header.php"); ?>
<div class="w-4/5 mx-auto">
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:gap-8">
        <!-- nav -->
        <?php require base_path("view/partials/nav.php"); ?>

        <!-- main -->
        <div class="lg:col-span-2 mt-5 space-y-4">
            <article class="rounded-xl border-2 border-gray-100 bg-white text-left w-full">
                <div class="flex items-start gap-4 p-4">
                    <a href="/profile" class="block shrink-0 z-10">
                        <img alt="Speaker" src="<?= $data['profile_pic'] ?>" class="h-10 w-10 rounded-full object-cover" />
                    </a>
                    <div>
                        <a href="/profile" class="inline-block shrink-0">
                            <p class="text-sm text-gray-500"><span class="font-semibold text-base text-gray-700"><?= $data['firstname'] . " " . $data['lastname'] ?></span> <?= $data['at'] ?></p>
                        </a>
                        <p class="line-clamp-2 text-gray-700">
                            <?= $data['question'] ?>
                        </p>
                    </div>
                </div>
                <!-- write a comment -->
                <form action="/profile/questions/comments" method="post">
                    <!-- TODO: create a post comment and interact with the db -->
                    <div class="sm:flex sm:items-center sm:gap-2 w-11/12 mx-auto border-t py-4 flex">
                        <input type="hidden" name="at" value="<?= $curr_user['at'] ?>">
                        <input type="hidden" name="profile_pic" value="<?= $curr_user['profile_pic'] ?>">
                        <input type="hidden" name="firstname" value="<?= $curr_user['firstname'] ?>">
                        <input type="hidden" name="lastname" value="<?= $curr_user['lastname'] ?>">
                        <input type="hidden" name="question_id" value="<?= $data['id'] ?>">
                        <input type="hidden" name="existing_comments" value="<?= $encoded ?>">
                        
                        <a href="/profile" class="block shrink-0 z-10 self-start">
                            <img alt="Speaker" src="<?= $curr_user['profile_pic'] ?>" class="h-10 w-10 rounded-full object-cover" />
                        </a>
                        <textarea name="comment" class="w-full resize-none pb-4 px-2 overflow-none focus:outline-none focus:border-none text-lg" id="reply" placeholder="Post your reply..."></textarea>

                        <button class="py-2 px-6 text-white bg-blue-500 rounded-xl font-semibold enabled:hover:bg-blue-600 disabled:cursor-not-allowed disabled:opacity-50" disabled id="replyBtn" type="submit">Reply</button>
                    </div>
                </form>
                <!-- comments -->
                <div class="sm:flex sm:items-center sm:gap-2 w-11/12 mx-auto border-t">
                    <ul class="mt-2">
                        <?php foreach (array_reverse($data['comments']) as $row):?>
                            <li class="w-full py-2 flex items-start gap-4">
                                <a href="/profile" class="block shrink-0 z-10">
                                    <img alt="Speaker" src="<?= $row['profile_pic'] ?>" class="h-10 w-10 rounded-full object-cover" />
                                </a>
                                <div class="bg-[#F3F4F6] px-4 rounded-xl space-y-1 py-1 cursor-pointer hover:bg-gray-200">
                                    <a href="/profile" class="inline-block shrink-0">
                                        <p class="text-sm text-gray-500"><span class="font-semibold text-base text-gray-700"><?= $row['firstname'] . " " . $row['lastname'] ?></span> <?= $row['at'] ?></p>
                                    </a>
                                    <p class="line-clamp-2 text-sm text-gray-700 pb-2">
                                        <?= $row['comment'] ?>
                                    </p>
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>    

                </div>
            </article>
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