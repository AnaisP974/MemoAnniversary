<?php
include_once("./Components/partials/header.php");
?>
<main class="w-full">
    <div class="flex bg-white" style="height:600px;">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
            <div>
                <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">Welcome to <span class="text-indigo-600">Memo </span>Anniversary</h2>
                <p class="mt-2 text-sm text-gray-500 md:text-base">Never miss another birthday with this easy-to-use web application. Create your account, record the birthdays you don’t want to forget, and you're all set! You’ll receive a reminder 1 day before your loved ones’ birthdays via email or SMS, and on the day itself, your loved ones will receive a birthday greeting by email or SMS.</p>
                <div class="flex justify-center lg:justify-start mt-6">
                    <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800" href="/login">Get Started</a>
                    <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400" href="/about">Learn More</a>
                </div>
            </div>
        </div>
        <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
            <div class="h-full object-cover" style="background-image: url(https://images.pexels.com/photos/2072153/pexels-photo-2072153.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
                <div class="h-full bg-black opacity-25"></div>
            </div>
        </div>
    </div>
</main>