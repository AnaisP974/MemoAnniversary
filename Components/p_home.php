<div class="container px-6 py-8 mx-auto">
    <h3 class="text-3xl font-medium text-gray-700">Dashboard Home</h3>

    <?php
    if (!empty($_SESSION['succes'])):
    ?>
        <div class="flex justify-center mt-4" id="succes-alert">
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
                        <?= $_SESSION['succes'] ?>
                    </p>
                </div>
                <div
                    data-dismissible-target="alert"
                    data-ripple-dark="true"
                    class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-green-800 hover:bg-opacity-20">
                    <button class="w-max rounded-lg p-1" id="close-succes-btn">
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
        <script src="./Assets/js/session.js"></script>
    <?php
    endif;
    ?>

    <!-- CARDS -->
    <div class="mt-4">
        <div class="flex flex-wrap -mx-6">
            <a class="w-full px-6 sm:w-1/2 xl:w-1/3" href="/profile?pg=new_category">
                <article class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                    <figure class="p-3 bg-indigo-600 bg-opacity-75 rounded-full">
                        <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3.01" y2="6"></line>
                            <line x1="3" y1="12" x2="3.01" y2="12"></line>
                            <line x1="3" y1="18" x2="3.01" y2="18"></line>
                        </svg>

                    </figure>

                    <section class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700"><?= count($categories) ?> Categor<?= count($categories) > 1 ? "ies" : "y" ?></h4>
                        <div class="text-gray-500">Create new category</div>
                    </section>
                </article>
            </a>

            <a href="/profile?pg=new_birthday" class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                <article class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                    <figure class="p-3 bg-orange-600 bg-opacity-75 rounded-full">
                        <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </figure>

                    <section class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700"><?= count($birthdays) ?> Birthday<?= count($birthdays) > 1 ? "s" : "" ?></h4>
                        <div class="text-gray-500">Create new birthday</div>
                    </section>
                </article>
            </a>

            <a href="#" class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                <article class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                    <figure class="p-3 bg-pink-600 bg-opacity-75 rounded-full">
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </figure>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">History</h4>
                        <div class="text-gray-500">View the sending history</div>
                    </div>
                </article>
            </a>
        </div>
    </div>

    <!-- SEPARATOR -->
    <div class="mt-8"></div>

    <!-- TABLE -->
    <div class="flex flex-col mt-8">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Name</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Contact</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Birth Date</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Role</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        <?php
                        if (count($birthdays) > 0):
                        ?>

                            <?php

                            foreach ($birthdays as $birth) :
                            ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">
                                            <!-- TODO: Ajouter une nouvelle fonctionnalité Img du birthday -->
                                            <!-- <div class="flex-shrink-0 w-10 h-10">
                                                <img class="w-10 h-10 rounded-full"
                                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                    alt="">
                                            </div> -->

                                            <div class="ml-4">
                                                <div class="text-sm font-medium leading-5 text-gray-900"><?= $birth['name']; ?>
                                                </div>
                                                <div class="text-sm leading-5 text-gray-500"><?= isset($birth['category']) ? $birth['category'] : "<i>no category</i>"; ?></div>
                                            </div>
                                        </div>
                                    </td>

                                    <td
                                        class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                        <?php
                                        $dateTimeString = $birth['birthday_date'];
                                        $dateTime = new DateTime($dateTimeString); // Crée un objet DateTime

                                        // Formate la date
                                        $formattedDate = $dateTime->format('F, j Y'); // 'F' pour le mois complet, 'j' pour le jour sans zéro, 'Y' pour l'année

                                        echo $formattedDate;
                                        ?></td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900"><?= isset($birth['email']) ? $birth['email'] : "<i>no email</i>"; ?></div>
                                        <div class="text-sm leading-5 text-gray-500"><?= isset($birth['phone']) ? $birth['phone'] : "<i>no phone number</i>"; ?></div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <span class="w-auto inline-flex px-2 text-xs font-semibold leading-5 <?= $birth['isEmail'] == 1 ? "text-green-800 bg-green-100" : "text-red-800 bg-red-100"; ?> rounded-full"><?= $birth['isEmail'] == 1 ? "&#10003;" : "&#10008;"; ?> Send email</span>
                                        <br><span class="w-auto inline-flex px-2 text-xs font-semibold leading-5 <?= $birth['isSMS'] == 1 ? "text-green-800 bg-green-100" : "text-red-800 bg-red-100"; ?> rounded-full"><?= $birth['isSMS'] == 1 ? "&#10003;" : "&#10008;"; ?> Send sms</span>
                                    </td>

                                    <td
                                        class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a> <br>
                                        <form action="./Traitement/delete-birthday.php" method="POST">
                                            <input type="text" class="hidden" name="birthID" id="birthID" value="<?= $birth['id'] ?>">
                                            <button type="submit" class="text-purple-600 hover:text-purple-900">
                                                🗑 Delete
                                            </button>
                                        </form>
                                        <a href="#"></a>

                                    </td>
                                </tr>
                            <?php
                            endforeach;
                            ?>

                        <?php
                        else :
                            echo ('<p class="text-red-600">Birthday not found.</p>');
                        endif;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>