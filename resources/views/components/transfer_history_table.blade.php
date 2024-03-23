<div class="overflow-x-auto">
    <div class="table-container" style="width: 200%;">
        <table class="table-auto w-full border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Date</th>
                    <th class="px-4 py-2">Amount</th>
                    <th class="px-4 py-2">From</th>
                    <th class="px-4 py-2">To</th>
                    <th class="px-4 py-2">Bank Name</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Receipt</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample data -->
                <table class="table-auto w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">Date</th>
                            <th class="px-4 py-2">Amount</th>
                            <th class="px-4 py-2">From</th>
                            <th class="px-4 py-2">To</th>
                            <th class="px-4 py-2">Bank Name</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Receipt</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @dd($transfer) --}}

@php
// Fetch the authenticated user's ID
$user_id = Auth::id();

// Fetch transfers where user_id matches $user_id
$transfers = \App\Models\Transfer::where('user_id', $user_id)->get();
@endphp

{{-- Now you can loop through $transfers and display them as needed --}}
@foreach($transfers as $trf)
{{-- Display transfer details --}}
<p>Transfer ID: {{ $transfer->id }}</p>
{{-- Add more details as needed --}}

                       
                        <tr>
                            <td class="border px-4 py-2">{{ $trf->created_at }}</td>
                            <td class="border px-4 py-2">{{ $trf->amount }}</td>
                            <td class="border px-4 py-2">{{ $trf->user->name }}</td>
                            <td class="border px-4 py-2">{{ $trf->acct_name }}</td>
                            <td class="border px-4 py-2">{{ $trf->bk_name }}</td>
                            <td class="border px-4 py-2">{{ $trf->status }}</td>
                            <td class="border px-4 py-2">
                                <a href="">
                                    <img src="{{ $trf->receipt }}" alt="" style="max-width: 59px;">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                </table>
                
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>
