<div class="p-6 lg:p-8 bg-white border-b border-gray-200 flex items-center justify-between" ">
    <div class="flex items-center">
        <x-user_image class="block h-12 w-auto" />
        <h1 class="ml-4 text-2xl font-medium text-gray-900">
            Welcome Mr {{ Auth::user()->name }}
        </h1>
    </div>
    <div class="text-right">
        <div>
            <h1 class="text-lg font-medium text-gray-900" style="color: rgb(158 161 168);">Total Balance</h1>
            <p class="text-gray-700">$654,545,454</p>
        </div>
        <div class="mt-4">
            <h1 class="text-lg font-medium text-gray-900" style="color: rgb(158 161 168);">Current Balance</h1>
            <p class="text-gray-700">$654,545,454</p>
        </div>
    </div>
</div>


<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
           <img src="https://cdn4.vectorstock.com/i/1000x1000/25/28/bank-transfer-icon-simple-element-from-banking-vector-34052528.jpg"
            alt="" style="width:100px;hieght:100px">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Transfer</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Navigate to the Transfer Page with one click, a gateway to initiate both local and international transfers. Explore a user-friendly interface tailored for effortless transactions, ensuring a smooth banking experience.
        </p>

        <p class="mt-4 text-sm">
            <a href="https://laravel.com/docs" class="inline-flex items-center font-semibold text-indigo-700">
               Go to Transfer

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    <div>
        <div class="flex items-center">
           <img src="https://th.bing.com/th/id/OIP.7wJD_H9edsTAjv5BNPyC6wAAAA?w=138&h=150&c=7&r=0&o=5&dpr=2&pid=1.7" alt="" style="hieght:100px;width:100px;">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a href="https://laracasts.com">Profile</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Manage account settings, preferences, and personal information. Discover a tailored space designed for seamless navigation and effortless customization, enhancing your overall user experience.
        </p>

        <p class="mt-4 text-sm">
            <a href="https://laracasts.com" class="inline-flex items-center font-semibold text-indigo-700">
               Go to Profile Settings

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    {{-- <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a href="https://tailwindcss.com/">Tailwind</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Laravel Jetstream is built with Tailwind, an amazing utility first CSS framework that doesn't get in your way. You'll be amazed how easily you can build and maintain fresh, modern designs with this wonderful framework at your fingertips.
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                Authentication
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Authentication and registration views are included with Laravel Jetstream, as well as support for user email verification and resetting forgotten passwords. So, you're free to get started with what matters most: building your application.
        </p>
    </div> --}}
<x-transfer_history_table />
   
    
</div>


