<?php
include_once("./Components/partials/header.php");
?>
<main class="bg-gray-100">
    <?php
    if (!empty($_SESSION['msg'])):
    ?>
        <div class="flex justify-center mt-4" id="alert-logout">
            <div
                class="font-regular relative block w-full max-w-screen-md rounded-lg bg-green-100 px-4 py-4 text-base text-green-800 border-green-500 border"
                data-dismissible="alert">
                <div class="absolute top-4 left-4">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        aria-hidden="true"
                        class="mt-px h-6 w-6">
                        <path
                            fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-8 mr-12">
                    <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-green-800 antialiased">
                        Success
                    </h5>
                    <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-green-800 antialiased">
                        <?= $_SESSION['msg'] ?>
                    </p>
                </div>
                <div
                    data-dismissible-target="alert"
                    data-ripple-dark="true"
                    class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-green-800 hover:bg-opacity-20">
                    <button class="w-max rounded-lg p-1" id="close-btn">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    <?php
    endif;
    ?>
    <div class="container mx-auto py-8">
        <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" method="POST" action="
        ./Traitement/login_form.php">
            <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>
            <?php
            if (!empty($_SESSION['err'])):
            ?>
                <div class="mb-4">
                    <p class="text-red-500"><?= $_SESSION['err'] ?></p>
                </div>
            <?php
            endif;
            ?>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="identity">Name or Email</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    type="text" id="identity" name="identity" placeholder="John Doe / john@example.com">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    type="password" id="password" name="password" placeholder="********">
            </div>
            <button
                class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
                type="submit">Login</button>

            <a href="/register" class="text-center text-indigo-500 hover:text-indigo-700">
                <p class="py-3">To create an account</p>
            </a>
        </form>
    </div>
</main>