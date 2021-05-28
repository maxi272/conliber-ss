<?php
?>





<html>
<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

</head>
<body>
<!--navbar-->
<nav class="bg-gray-600">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                    <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
                </div>
                <div class="hidden sm:block sm:ml-6">

                </div>
            </div>
        </div>
    </div>

</nav>


<!--stepper2-->
<div class=" stepper2 container mx-auto px-40">
    <div class="stepper2 p-5">
        <div class=" stepper2 mx-4 p-4">
            <div class=" stepper2 flex items-center">
                <div class=" steppe2r flex items-center text-indigo-600 relative">
                    <div class=" stepper2 rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-indigo-600 bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="100%" height="100%"  fill="none" viewBox="0 0 24 24" stroke="currentColor" class="feather feather-key">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                        </svg>

                    </div>
                    <div class=" absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-indigo-600">Scan</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-indigo-600"></div>
                <div class="flex items-center text-white relative">
                    <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 bg-indigo-600 border-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-indigo-600">Check</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
                <div class="flex items-center text-gray-500 relative">
                    <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">more?</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
                <div class="flex items-center text-gray-500 relative">
                    <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 bg-white border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">finished</div>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="h-48 flex flex-wrap content-center justify-center text-center">
    <div class=" middlePart middlePart2 flex-col justify-center text-center" style="padding-top: 18%">
        <div class="flex justify-center items-center">
            <!-- Start of component -->
            <div class=" bg-white border-none p-3 rounded-md tracking-wide shadow-md">
                <div id="header" class="flex">
                    <img alt="mountain" class="w-56 mt-1 mr-8 rounded-sm border-none" src="https://picsum.photos/seed/picsum/200" />
                    <div id="body" class="flex flex-col ml-5">
                        <div class="flex-col justify-center text-left">
                            <table class="table-fixed">
                                <thead>

                                </thead>
                                <h1 class="text-2xl font-light text-gray-700">Ist das dein Buch?</h1>
                                <tbody>
                                <tr class="h-6">
                                    <td class="w-5"></td>
                                </tr>
                                <tr>
                                    <td class=" text-md font-semibold text-gray-700 w-2/5">Titel:</td>
                                    <td class="w-1/5">   </td>
                                    <td class="w-2/5 text-md font-light text-gray-700">Seydlitz 10</td>
                                </tr>
                                <tr class="h-6">
                                    <td class="w-5"></td>
                                </tr>
                                <tr>
                                    <td class=" text-md font-semibold text-gray-700">Fach:</td>
                                    <td class="w-5"></td>
                                    <td class=" text-md font-light text-gray-700">Mathematik</td>
                                </tr>
                                <tr class="h-6">
                                    <td class="w-5"></td>
                                </tr>
                                <tr>
                                    <td class="text-md font-semibold text-gray-700">Klasse:</td>
                                    <td class="w-5"></td>
                                    <td class="text-md font-light text-gray-700">10.Klasse</td>
                                </tr>
                                <tr class="h-6">
                                    <td class="w-5"></td>
                                </tr>
                                <tr>
                                    <td class="text-md font-semibold text-gray-700">Verlag:</td>
                                    <td>  </td>
                                    <td class="text-md font-light text-gray-700">Schroedel</td>
                                </tr>

                                <tr class="h-8">
                                    <td class="w-5"></td>
                                </tr>

                                <tr>
                                    <td>
                                        <form style="margin-block-end: unset">
                                            <button class=" group relative  justify-center py-2 px-6 border border-transparent text-m font-medium rounded-md text-indigo-100 bg-indigo-400 hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="margin-left: 0px;margin-right: 70px; margin-bottom: unset">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                    <td>  </td>

                                    <td>
                                        <form style="margin-block-end: unset">
                                             <button class=" group relative  justify-center py-2 px-6 border border-transparent text-m font-medium rounded-md text-purple-100 bg-purple-400 hover:bg-purple-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="margin-bottom: unset; margin-right: unset">
                                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                 </svg>
                                             </button>
                                        </form>
                                    </td>
                                </tr>

                                </tbody>
                            </table>

                    </div>
                </div>
            </div>

            <!-- End of component -->
        </div>
    </div>
</div>


</body>
</html>
