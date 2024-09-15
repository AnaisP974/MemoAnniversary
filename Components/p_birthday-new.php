<?php
require_once('./logic_profile.php');
?>
<div class="container mx-auto py-8 flex">
    
    <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" method="POST" action="./Traitement/new-category_form.php">
        <h1 class="text-2xl font-bold mb-6 text-center">New category</h1>
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
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Category name :</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="text" id="name" name="name" placeholder="Family">
        </div>
        <button
            class="w-full bg-green-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-green-600 transition duration-300"
            type="submit">Save</button>
    </form>
</div>