
<html>
<link>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<!--navbar-->
<nav class="navbar bg-gray-600">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
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


<!--    Buttons-->
<div class="h-48 flex flex-wrap content-center justify-center text-center">

    <div class="mt-8 p-4" style="padding-top:7% ">
        <div class=" flex  justify-center bg-gray-50 py-12  sm:px-6 lg:px-8">
            <div class="max-w-lg w-full space-y-5">
                <div>
                    <h1 class="stepTitle stepTitle1 mt-6 text-center text-3xl font-extrabold text-gray-900" style="text-align: center; padding-top: 40%">
                        Hast du bereits einen Account?
                    </h1>
                    <br>

                </div>
                <form method="post">
                <button type="submit" class=" ConfAccBtn group relative w-full flex justify-center py-6 px-4 border border-transparent text-lg font-medium rounded-md text-indigo-100 bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Ich habe bereits einen Account
                </button>
                </form>
                <form method="post">
                <button type="submit" class=" ConfAccBtn group relative w-full flex justify-center py-6 px-4 border border-transparent text-lg font-medium rounded-md text-purple-100 bg-purple-500 hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Ich habe noch keinen Account
                </button>
                </form>
            </div>
        </div>
    </div>
</div>


        </div>
    </div>
</div>
</div>
</body>
</html>