<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-10">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          
            <!-- Type of transfer -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="purpose">Type of Transfer</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="purpose">
                    <option>Local Transfer</option>
                    <option>International Transfer</option>
                    <option>Express Transfer</option>
                    <!-- List of purposes -->
                </select>
            </div>
            
            <!-- Row 1 -->
            <div class="flex flex-wrap mb-4 -mx-2">
                <div class="w-1/2 px-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="account_number">Account Number</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="account_number" type="text" placeholder="Enter account number">
                </div>
                <div class="w-1/2 px-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="account_holder_name">Account Holder's Name</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="account_holder_name" type="text" placeholder="Enter account holder's name">
                </div>
            </div>
            
            <!-- Row 2 -->
            <div class="flex flex-wrap mb-4 -mx-2">
                <div class="w-1/2 px-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="bank_name">Bank Name</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="bank_name" type="text" placeholder="Enter bank name">
                </div>
                <div class="w-1/2 px-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="swift_code">SWIFT/BIC Code</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="swift_code" type="text" placeholder="Enter SWIFT/BIC code">
                </div>
            </div>
            
            <!-- Row 3 -->
            <div class="flex flex-wrap mb-4 -mx-2">
                <div class="w-1/2 px-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="iban">IBAN</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="iban" type="text" placeholder="Enter IBAN">
                </div>
                <div class="w-1/2 px-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="recipient_name">Recipient's Name</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="recipient_name" type="text" placeholder="Enter recipient's name">
                </div>
            </div>
            
            <!-- Row 4 -->
            <div class="flex flex-wrap mb-4 -mx-2">
                <div class="w-1/2 px-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="recipient_address">Recipient's Address</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="recipient_address" type="text" placeholder="Enter recipient's address">
                </div>
                <div class="w-1/2 px-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="amount">Amount</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="amount" type="text" placeholder="Enter amount">
                </div>
            </div>
            
            <!-- Row 5 -->
            <div class="flex flex-wrap mb-4 -mx-2">
                <div class="w-1/2 px-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" type="text" placeholder="Enter description">
                </div>
                <div class="w-1/2 px-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="purpose">Purpose of Transfer</label>
                    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="purpose">
                        <option>Select purpose</option>
                        <!-- List of purposes -->
                    </select>
                </div>
            </div>
            
            <!-- Button -->
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Confirm Transfer
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                    Terms & Conditions
                </a>
            </div>
            
        </form>
    </div>
</body>
</html>

