<?php
include_once("./Components/partials/header.php");
?>
<main class="bg-gray-100">
    <div class="container mx-auto py-8">
        <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" method="POST" action="./Traitement/register_form.php">
            <h1 class="text-2xl font-bold mb-6 text-center">Registration</h1>
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
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name*</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    type="text" id="name" name="name" placeholder="John Doe" value="<?php echo isset($name) ? $name : ''; ?>">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email*</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    type="email" id="email" name="email" placeholder="john@example.com" value="<?php echo isset($email) ? $email : ''; ?>">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password*</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    type="password" id="password" name="password" placeholder="********">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Confirm Password*</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    type="password" id="confirm-password" name="confirm-password" placeholder="********">
            </div>
            <button
                class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
                type="submit">Register</button>

            <a href="/login" class="text-center text-indigo-500 hover:text-indigo-700">
                <p class="py-3">Already a customer ?</p>
            </a>
        </form>
    </div>
</main>