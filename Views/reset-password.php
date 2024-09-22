<?php
include_once("./Components/partials/header.php");
?>
<main class="bg-gray-100">
    <div class="container mx-auto py-8">
        <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" method="POST" action="
        ./Traitement/reset-password_form.php">
            <h1 class="text-2xl font-bold mb-6 text-center">Reset password</h1>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    type="email" id="email" name="email" placeholder="john@example.com">
            </div>
            <button
                class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
                type="submit">Send</button>

            <a href="/register" class="text-center text-indigo-500 hover:text-indigo-700">
                <p class="py-3">To create an account</p>
            </a>
        </form>
    </div>
</main>