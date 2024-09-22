<?php
require_once('./logic_profile.php');
?>
<div class="container m-8 py-8 w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center">Categories</h1>

    <h2 class="text-l font-semibold mb-4">Existing categories :</h2>
    <?php
    if (count($categories) > 0):
    ?>
        <ul class="mb-4 px-4">
            <?php

            foreach ($categories as $cat) :
            ?>
                <li class="flex items-center">
                    <p><?= $cat['name']; ?> </p>
                    <form action="./Traitement/delete-category.php" method="POST">
                        <input type="text" class="hidden" name="catID" id="catID" value="<?= $cat['id'] ?>">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#ff0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </form>
                </li>
            <?php
            endforeach;
            ?>
        </ul>
    <?php
    else :
        echo ('<p class="text-red-600">Category not found.</p>');
    endif;
    ?>
    <form class="border border-slite-500 p-4" method="POST" action="./Traitement/new-category_form.php">

        <h2 class="text-l font-semibold mb-4 text-center">Create new category</h2>

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