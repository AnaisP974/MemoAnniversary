<div class="container px-6 py-8 mx-auto">
    <h3 class="text-3xl font-medium text-gray-700">Dashboard Home</h3>

    <!-- CARDS -->
    <div class="mt-4">
        <div class="flex flex-wrap -mx-6">
            <a class="w-full px-6 sm:w-1/2 xl:w-1/3" href="/profile?pg=p_category-new">
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
                        <h4 class="text-2xl font-semibold text-gray-700">XX Categories</h4>
                        <div class="text-gray-500">Create new category</div>
                    </section>
                </article>
            </a>

            <a href="#" class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                <article class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                    <figure class="p-3 bg-orange-600 bg-opacity-75 rounded-full">
                        <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </figure>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">XX Birthays</h4>
                        <div class="text-gray-500">Create new birthday</div>
                    </div>
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
                                Title</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Status</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Role</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-10 h-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                            alt="">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm font-medium leading-5 text-gray-900">John Doe
                                        </div>
                                        <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                <div class="text-sm leading-5 text-gray-500">Web dev</div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                            </td>

                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                Owner</td>

                            <td
                                class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-10 h-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                            alt="">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm font-medium leading-5 text-gray-900">John Doe
                                        </div>
                                        <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                <div class="text-sm leading-5 text-gray-500">Web dev</div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                            </td>

                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                Owner</td>

                            <td
                                class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-10 h-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                            alt="">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm font-medium leading-5 text-gray-900">John Doe
                                        </div>
                                        <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                <div class="text-sm leading-5 text-gray-500">Web dev</div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                            </td>

                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                Owner</td>

                            <td
                                class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-10 h-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                            alt="">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm font-medium leading-5 text-gray-900">John Doe
                                        </div>
                                        <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                <div class="text-sm leading-5 text-gray-500">Web dev</div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                            </td>

                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                Owner</td>

                            <td
                                class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-10 h-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                            alt="">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm font-medium leading-5 text-gray-900">John Doe
                                        </div>
                                        <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                <div class="text-sm leading-5 text-gray-500">Web dev</div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                            </td>

                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                Owner</td>

                            <td
                                class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-10 h-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                            alt="">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm font-medium leading-5 text-gray-900">John Doe
                                        </div>
                                        <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                <div class="text-sm leading-5 text-gray-500">Web dev</div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                            </td>

                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                Owner</td>

                            <td
                                class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-10 h-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                            alt="">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm font-medium leading-5 text-gray-900">John Doe
                                        </div>
                                        <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                <div class="text-sm leading-5 text-gray-500">Web dev</div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                            </td>

                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                Owner</td>

                            <td
                                class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-10 h-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                            alt="">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm font-medium leading-5 text-gray-900">John Doe
                                        </div>
                                        <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                <div class="text-sm leading-5 text-gray-500">Web dev</div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                            </td>

                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                Owner</td>

                            <td
                                class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>