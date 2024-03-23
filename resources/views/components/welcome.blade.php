<div class="p-6 lg:p-8 bg-white border-b border-gray-200 flex items-center justify-between" ">
    <div class="flex items-center">
        <x-user_image class="block h-12 w-auto" />
        <h1 class="ml-4 text-2xl font-medium text-gray-900">
          {{ Auth::user()->name }}
        </h1>
    </div>
    <div class="text-right">
        <div>
            <h1 class="text-lg font-medium text-gray-900" style="color: rgb(158 161 168);font-size: x-small;">Total Balance</h1>
            <p class="text-gray-700" style="font-size: xx-large;">${{ Auth::user()->total_bal }}</p>
        </div>
        <div class="mt-4">
            <h1 class="text-lg font-medium text-gray-900" style="color: rgb(158 161 168); font-size: x-small;">Current Balance</h1>
            <p class="text-gray-700" style="font-size: xx-large;">${{ Auth::user()->total_bal - Auth::user()->total_bal /10}}</p>
        </div>
    </div>
</div>
<!----beneficiary---->
<div class="bg-white rounded-lg shadow-lg p-6">
    <div class="text-xl font-bold mb-4">Beneficiary</div>
    <div class="border-t border-gray-200 pt-4">
        <p class="mb-2"><span class="font-bold">Name:</span> {{Auth()->next_kin_name}}</p>
        <p class="mb-2"><span class="font-bold">Email:</span> {{Auth()->next_kin_name}}</p>
       
    </div>
</div>

<!----beneficiary---->
<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
           <img src="https://cdn4.vectorstock.com/i/1000x1000/25/28/bank-transfer-icon-simple-element-from-banking-vector-34052528.jpg"
            alt="" style="width:100px;hieght:100px">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a href="{{ route('create_trf',['user_id'=>Auth()->user()->id]) }}">Transfer</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Navigate to the Transfer Page with one click, a gateway to initiate both local and international transfers. Explore a user-friendly interface tailored for effortless transactions, ensuring a smooth banking experience.
        </p>

        <p class="mt-4 text-sm">
            <a href="{{ route('create_trf',['user_id'=>Auth()->user()->id]) }}" class="inline-flex items-center font-semibold text-indigo-700">
               Go to Transfer

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    <div>
        <div class="flex items-center">
           <img src="https://www.bing.com/th?id=OIP.ymEUbl8s2t2yzvdNqwOCyAHaHa&pid=3.1&cb=&w=300&h=300&p=0" alt="" style="hieght:100px;width:100px;">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a href="{{ route('profile.show') }}">Profile</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Manage account settings, preferences, and personal information. Discover a tailored space designed for seamless navigation and effortless customization, enhancing your overall user experience.
        </p>

        <p class="mt-4 text-sm">
            <a href="{{ route('profile.show') }}" class="inline-flex items-center font-semibold text-indigo-700">
               Go to Profile Settings

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

   
<x-transfer_history_table />
   
    
</div>


