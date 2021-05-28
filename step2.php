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


<!--stepper-->
<div class=" stepper container mx-auto px-40">
    <div class="stepper p-5">
        <div class=" stepper mx-4 p-4">
            <div class=" stepper flex items-center">
                <div class=" stepper flex items-center text-white relative">
                    <div class=" stepper rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-indigo-600 bg-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="100%" height="100%"  fill="none" viewBox="0 0 24 24" stroke="currentColor" class="feather feather-key">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                        </svg>

                    </div>
                    <div class=" absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-indigo-600">Reg-Code</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
                <div class="flex items-center text-gray-500 relative">
                    <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 bg-white border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">KGR-User</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
                <div class="flex items-center text-gray-500 relative">
                    <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">check-user</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
                <div class="flex items-center text-gray-500 relative">
                    <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">Add-RFID</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
                <div class="flex items-center text-gray-500 relative">
                    <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">ready</div>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="h-48 flex flex-wrap content-center justify-center text-center">
    <div class=" middlePart middlePart2 flex-col justify-center text-center" style="padding-top: 10%">
    <!-- Make sure the following div id (OTPInput) is the same in the Javascipt -->
    <h1 class=" stepTitle stepTitle2 mt-6 text-center text-3xl font-light text-gray-900" ">
        Bitte gib hier deinen Registerierungscode ein.
    </h1>
    <br>
    <form method="post">
        <!-- This is the div where the otp fields are generated by Javascript -->
        <div class="flex justify-center " id="OTPInput">
        </div>

        <!-- Change this name attribute to mach your form submission parameters. Make sure you update the id in the javascript code if any changes are made to the id attribute -->
        <input hidden id="otp" name="otp" value="">
        <button type="submit" name="submitbutton" class="mt-10 focus:outline-none button button-primary  font-bold text-lg px-6 pt-3 pb-3 rounded bg-purple-500 hover:bg-purple-600 text-white" id="otpSubmit">Bestätigen</button>
    </form>
    </div>
</div>
<div class="h-48 flex flex-wrap content-end ">
        <div class=" stepBar2 flex p-2">
            <button class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
        hover:bg-gray-200
        bg-gray-100
        text-gray-500
        border duration-200 ease-in-out
        border-gray-500 transition">Zurück</button>
            <div class="flex-auto flex flex-row-reverse">

            </div>
        </div>
</div>

<script>

    /* This creates all the OTP input fields dynamically. Change the otp_length variable  to change the OTP Length */
    const $otp_length = 6;

    const element = document.getElementById('OTPInput');
    for (let i = 0; i < $otp_length; i++) {
        let inputField = document.createElement('input'); // Creates a new input element
        inputField.className = "w-12 h-12 bg-gray-400 border-gray-400 outline-none focus:bg-gray-200 m-2 text-center rounded focus:border-blue-400 focus:shadow-outline";
        // Do individual OTP input styling here;
        inputField.style.cssText = "color: transparent; text-shadow: 0 0 0 gray;"; // Input field text styling. This css hides the text caret
        inputField.id = 'otp-field' + i; // Don't remove
        inputField.maxLength = 1; // Sets individual field length to 1 char
        element.appendChild(inputField); // Adds the input field to the parent div (OTPInput)
    }

    /*  This is for switching back and forth the input box for user experience */
    const inputs = document.querySelectorAll('#OTPInput > *[id]');
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].addEventListener('keydown', function (event) {
            if (event.key === "Backspace") {
                inputs[i].value = '';
                if (i !== 0) {
                    inputs[i - 1].focus();
                }
            } else if (event.key === "ArrowLeft" && i !== 0) {
                inputs[i - 1].focus();
            } else if (event.key === "ArrowRight" && i !== inputs.length - 1) {
                inputs[i + 1].focus();
            }
        });
        inputs[i].addEventListener('input', function () {
            inputs[i].value = inputs[i].value.toUpperCase(); // Converts to Upper case. Remove .toUpperCase() if conversion isnt required.
            if (i === inputs.length - 1 && inputs[i].value !== '') {
                return true;
            } else if (inputs[i].value !== '') {
                inputs[i + 1].focus();
            }
        });

    }
    /*  This is to get the value on pressing the submit button
    *   In this example, I used a hidden input box to store the otp after compiling data from each input fields
    *   This hidden input will have a name attribute and all other single character fields won't have a name attribute
    *   This is to ensure that only this hidden input field will be submitted when you submit the form */

    document.getElementById('otpSubmit').addEventListener("click", function () {
        const inputs = document.querySelectorAll('#OTPInput > *[id]');
        let compiledOtp = '';
        for (let i = 0; i < inputs.length; i++) {
            compiledOtp += inputs[i].value;
        }
        document.getElementById('otp').value = compiledOtp;
        return true;
    });

</script>
</body>
</html>