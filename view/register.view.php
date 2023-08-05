<?php require base_path("view/partials/header.php"); ?>
<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
  <div class="mx-auto w-4/5">
    <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">
      Welcome!
    </h1>

    <form action="/register" method="post" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8 flex flex-col" enctype="multipart/form-data">
      <p class="text-center text-lg font-medium">Create an account</p>
      <div class="space-y-4">
        <!-- 1. -->
        <div class="flex space-x-4">
          <!-- firstname -->
          <div class="flex-1">
            <input type="text" name="firstname" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Enter firstname" />
            <p class="text-xs text-red-500"><?= $arrError['firstname']?? "" ?></p>
          </div>

          <!-- lastname -->
          <div class="flex-1">
            <input type="text" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" name="lastname" placeholder="Enter lastname" />
            <p class="text-xs text-red-500"><?= $arrError['lastname']?? "" ?></p>
          </div>
        </div>

        <!-- 2. -->
        <div class="flex space-x-4">
          <!-- sex -->
          <div class="flex-1 items-center">
            <select name="sex" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
            <p class="text-xs text-red-500"><?= $arrError['sex']?? "" ?></p>
          </div>

          <!-- at -->
          <div class="flex-1 items-center">
            <input type="text" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" name="at" placeholder="Enter @/at"  />
            <p class="text-xs text-red-500"><?= $arrError['at']?? "" ?></p>
          </div>
        </div>

        <!-- 3. -->
        <div class="flex space-x-4">
          <!-- email -->
          <div class="flex-1 relative">
            <input type="email" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" name="email" placeholder="Enter email"  />
            <p class="text-xs text-red-500"><?= $arrError['email']?? "" ?></p>
            <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                </svg>
            </span>
          </div>

          <!-- password -->
          <div class="flex-1 relative">
            <input type="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" name="password" placeholder="Enter password"  />
            <p class="text-xs text-red-500"><?= $arrError['password']?? "" ?></p>
            <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
            </span>
          </div>
        </div>
      </div>

      

      <div class="flex justify-center pt-5">
        <button type="submit" class="rounded-lg bg-indigo-600 px-5 py-3 w-1/2 text-sm font-medium text-white">
          Sign up
        </button>
      </div>

      <p class="text-center text-sm text-gray-500">
        already have an account?
        <a class="underline" href="/register">Log in</a>
      </p>
    </form>
  </div>
</div>
<?php require base_path("view/partials/footer.php"); ?>