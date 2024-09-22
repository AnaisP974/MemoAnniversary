<?php
require_once('./logic_profile.php');
require_once('./Services/country_codes.php');
?>
<div class="container mx-auto py-8 flex">

    <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" method="POST" action="./Traitement/new_birthday.php">
        <h1 class="text-2xl font-bold mb-6 text-center">New birthday</h1>
        <?php
        if (!empty($_SESSION['birthErr'])):
        ?>
            <div class="mb-4">
                <p class="text-red-500"><?= $_SESSION['birthErr'] ?></p>
            </div>
        <?php
        endif;
        ?>
        <!-- NAME -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name :</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="text" id="name" name="name" placeholder="Mummy">
        </div>
        <!-- BIRTHDAY DATE -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="birth_date">Birthday :</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="date" id="birth_date" name="birth_date">
        </div>

        <!-- PHONE -->
        <div class="w-full">
            <a
                class="mb-4 inline-block rounded border border-current px-6 py-1 text-sm font-medium text-indigo-600 transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-indigo-500"
                id="add-phone"> ADD PHONE</a>
        </div>

        <div id="phone-component" class="hidden border-l-2 border-indigo-600 p-2 mb-5">
            <h3 class="text-xl text-indigo-700 font-semibold mb-4 bg-gray-100">Phone</h3>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="country_code">Choose a country code:</label>

                <select name="country_code" id="country_code">
                    <option value="">--Please choose a country code--</option>
                    <?php
                    foreach ($country_codes as $code => $country) {
                    ?>
                        <option value="<?= $code ?>"><?= $country . " " . $code ?></option>
                    <?php
                        echo "<br>";
                    }
                    ?>
                </select>

            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone :</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    type="tel" id="phone" name="phone">
            </div>

            <fieldset class="mb-4">
                <legend class="block text-gray-700 text-sm font-bold mb-2">Send a sms on their birthday?</legend>

                <div>
                    <input type="radio" id="noSms" name="isSMS" value="no" checked/>
                    <label for="no">no</label>
                </div>

                <div>
                    <input type="radio" id="yesSms" name="isSMS" value="yes" />
                    <label for="yes">yes</label>
                </div>
            </fieldset>

            <div class="mb-4 hidden" id="textSms">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="sms">SMS :</label>
                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    name="sms" id="sms" cols="30" rows="5" placeholder="Write the birthday sms that will be sent by email."></textarea>
            </div>

            <div class="w-full flex justify-center mb-4">
                <a
                    class="inline-block rounded border border-current px-6 py-1 text-sm font-medium text-red-600 transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-red-500"
                    id="cancel-phone">
                    Cancel
                </a>
            </div>
        </div>

        <!-- EMAIL -->
        <div class="w-full">
            <a
                class="mb-4 inline-block rounded border border-current px-6 py-1 text-sm font-medium text-indigo-600 transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-indigo-500"
                id="add-email"> ADD EMAIL</a>
        </div>

        <div id="email-component" class="hidden border-l-2 border-indigo-600 p-2 mb-5">

            <h3 class="text-xl text-indigo-700 font-semibold mb-4 bg-gray-100">Email</h3>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email :</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    type="email" id="email" name="email">
            </div>

            <fieldset class="mb-4">
                <legend class="block text-gray-700 text-sm font-bold mb-2">Send a email on their birthday?</legend>

                <div>
                    <input type="radio" id="noEmail" name="isEmail" value="no" checked/>
                    <label for="no">no</label>
                </div>

                <div>
                    <input type="radio" id="yesEmail" name="isEmail" value="yes" />
                    <label for="yes">yes</label>
                </div>
            </fieldset>

            <div class="mb-4 hidden" id="text-email">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Email message :</label>
                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    name="message" id="message" cols="30" rows="5" placeholder="Write the birthday message that will be sent by email."></textarea>
            </div>

            <div class="w-full flex justify-center mb-4">
                <a
                    class="inline-block rounded border border-current px-6 py-1 text-sm font-medium text-red-600 transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-red-500"
                    id="cancel-email">
                    Cancel
                </a>
            </div>
        </div>

        <!-- MORE INFORMATIONS -->
        <div class="w-full">
            <a
                class="mb-4 inline-block rounded border border-current px-6 py-1 text-sm font-medium text-indigo-600 transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-indigo-500"
                id="add-more"> ADD MORE</a>
        </div>
        <div id="more-component" class="hidden border-l-2 border-indigo-600 p-2 mb-5">

            <h3 class="text-xl text-indigo-700 font-semibold mb-4 bg-gray-100">Note</h3>

            <div class="mb-4" id="categoryContent">
                <?php
                if (count($categories) > 0):
                ?>
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="category">Choose a category:</label>

                        <select name="category" id="category">
                            <option value="">--Please choose an option--</option>
                            <?php

                            foreach ($categories as $cat) :
                            ?>
                                <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                            <?php
                            endforeach;
                            ?>

                        </select>
                    </div>
                <?php
                else :
                    echo "No category created";
                endif;
                ?>
            </div>

            <div class="mb-4" id="descContent">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description :</label>
                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    name="description" id="description" cols="30" rows="5" placeholder="Describe your relationship"></textarea>
            </div>

            <div class="mb-4" id="likesContent">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="likes">Likes :</label>
                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    name="likes" id="likes" cols="30" rows="5" placeholder="Write the things that this person likes."></textarea>
            </div>

            <div class="w-full flex justify-center mb-4">
                <a
                    class="inline-block rounded border border-current px-6 py-1 text-sm font-medium text-red-600 transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-red-500"
                    id="cancel-more">
                    Cancel
                </a>
            </div>
        </div>

        <button
            class="w-full bg-green-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-green-600 transition duration-300"
            type="submit">Save</button>
    </form>
</div>