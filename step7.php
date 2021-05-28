

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
                <div class=" steppe2r flex items-center text-white relative">
                    <div class=" stepper2 rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-indigo-600 bg-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="100%" height="100%"  fill="none" viewBox="0 0 24 24" stroke="currentColor" class="feather feather-key">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                        </svg>

                    </div>
                    <div class=" absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-indigo-600">Scan</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
                <div class="flex items-center text-gray-500 relative">
                    <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 bg-white border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">Check</div>
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
                    <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
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

<form method="post" autocomplete="off" style="margin-block-end: unset">
    <div class="h-48 flex flex-wrap content-center justify-center text-center">
        <div class=" middlePart middlePart3 flex-col justify-center text-center" style="padding-top: 1%">
            <h1 class=" stepTitle stepTitle3 mt-6 text-center text-3xl font-light text-gray-900" ">
            Scanne den Barcode in deinem Buch.
            </h1>
            <br>
            <div class="RfidImg">
                <img src="">
            </div>
            <div id="invisbtn" style="position: absolute; top: 0px; z-index: -900">
                <input  autofocus name="invisBtn" class=" invisBtn focus:outline-none  appearance-none border-2 border-purple-500 rounded py-2 px-3 text-grey-600" placeholder="z.B. schimaxi" >
            </div>

            <div class="relative mr-6 my-2">

                <div class="flex-auto flex flex-row-reverse">



                </div>
            </div>
        </div>
    </div>
</form>

</body>
</html>