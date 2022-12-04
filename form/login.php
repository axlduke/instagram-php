<!DOCTYPE html>
<html lang="en">
<?php
    $title = "Log in ";
    include 'include/head.php';
?>
<body
    class="bg-gray-50">
    <div 
        class="flex justify-center lg:mt-3"
    >
        <div class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 border border-gray-300 rounded-md w-full max-w-sm">
            <div class="font-medium self-center text-6xl text-gray-800" style="font-family: 'Grand Hotel', cursive;">Instagram</div>
            <div class="mt-10 flex justify-center">
                <form action="#">
                    <div class="flex flex-col mb-6">
                        <div class="relative">
                            <input id="email" name="email" type="text" class="peer h-10 w-72 pt-1 pl-2 border border-gray-300 bg-gray-100 text-gray-900 placeholder-transparent focus:outline-none focus:border-rose-600" placeholder="john@doe.com" />
                            <label for="email" class="absolute pl-2 pt-1 left-0 -top-1.5 text-gray-600 text-xs transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-1 peer-focus:text-gray-600 peer-focus:text-xs">Username or email</label>
                        </div>
                    </div>
                    <div class="flex flex-col mb-6">
                        <div class="relative">
                        <input id="password" name="password" type="password" class="peer h-10 w-72 pt-1 pl-2 border border-gray-300 bg-gray-100 text-gray-900 placeholder-transparent focus:outline-none focus:border-rose-600" placeholder="*******" />
                            <label for="password" class="absolute pl-2 pt-1 left-0 -top-1.5 text-gray-600 text-xs transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-1 peer-focus:text-gray-600 peer-focus:text-xs">Password</label>
                        </div>
                    </div>
                    <div class="flex w-full">
                    <button type="submit" class="flex items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-blue-600 hover:bg-blue-700 rounded py-2 w-full transition duration-150 ease-in">
                        <span class="mr-2">Log in</span>
                    </button>
                    </div>
                </form>
            </div>
            <div class="relative mt-6 h-px bg-gray-300">
                <div class="absolute left-0 top-0 flex justify-center w-full -mt-2">
                    <span class="bg-white px-4 text-xs text-gray-500 uppercase">Or</span>
                </div>
            </div>
            <button class="relative mt-6 py-2 text-sm text-gray-800">
                <!-- <span class="absolute left-0 top-0 flex items-center justify-center h-full w-10 text-blue-500"><i class="uil uil-facebook"></i></span> -->
                <span><i class="uil uil-facebook text-blue-800 text-xl"></i>&nbsp;&nbsp;Login with Facebook</span>
            </button>
            <div class="flex justify-center items-center mt-1">
            <a href="#" target="_blank" class="inline-flex items-center text-gray-400 hover:text-blue-700 text-xs text-center">
                <span class="ml-2">Forgotten your password?</span>
            </a>
            </div>
        </div>
    </div>
    <div 
        class="flex justify-center lg:mt-3"
    >
        <div class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 border border-gray-300 rounded-md w-full max-w-sm">
            <span class="self-center text-gray-600">Don't have an account? 
                <a 
                href=""
                class="text-blue-500 font-bold">Sign up</a>
            </span>
        </div>
    </div>
    <?php include 'include/footer.php';?>
</body>
</html>