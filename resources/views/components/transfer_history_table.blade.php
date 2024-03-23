<div class="overflow-x-auto">
    <div class="table-container" style="width: 200%;">
        <table class="table-auto w-full border-collapse">
            <thead style="
            background-color: black;
            color: ghostwhite;
        ">
                <tr class="bg-gray-200" style="
                background-color: black;
                color: ghostwhite;
            ">
                    <th class="px-4 py-2">Date</th>
                    <th class="px-4 py-2">Amount</th>
                    <th class="px-4 py-2">From</th>
                    <th class="px-4 py-2">To</th>
                    <th class="px-4 py-2">Bank Name</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Tracking Number</th>
                    <th class="px-4 py-2">Receipt</th>
                </tr>
            </thead>
            <tbody>
           
@php
// Fetch the authenticated user's ID
$user_id = Auth::id();

// Fetch transfers where user_id matches $user_id
$transfers = \App\Models\Transfer::where('user_id', $user_id)->get();
@endphp

{{-- Now you can loop through $transfers and display them as needed --}}
@foreach($transfers as $trf)
                          <tr>
                            <td class="border px-4 py-2">{{ $trf->created_at }}</td>
                            <td class="border px-4 py-2">${{ $trf->amount }}</td>
                            <td class="border px-4 py-2">{{Auth()->user()->name }}</td>
                            <td class="border px-4 py-2">{{ $trf->acct_name }}</td>
                            <td class="border px-4 py-2">{{ $trf->bk_name }}</td>
                            <td class="border px-4 py-2"> 
                                @if($trf->status == 1)
                                <div class="w-full bg-gray-200 rounded overflow-hidden">
                            <div class="bg-green-500 text-xs leading-none py-1 text-center text-white" style="width: 100%">Successful</div>
                            </div>
                            @elseif($trf->status == 0)
                                <div class="w-full bg-gray-200 rounded overflow-hidden">
                                    <div class="bg-yellow-500 text-xs leading-none py-1 text-center text-white" style="width: 50%"> Pending...</div>
                                </div>
                            @else
                                <div class="w-full bg-gray-200 rounded overflow-hidden">
                                    <div class="bg-red-500 text-xs leading-none py-1 text-center text-white" style="width: 100%">Failed</div>
                                </div>
                            @endif</td>
                            <td class="border px-4 py-2">LA5365{{ $trf->id }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('reciept_trf', ['user_id' => $user_id, 'transfers' => $transfers])  }}">
                                    <img src="https://th.bing.com/th/id/OIP.1-A7aCgOzKvJe4-EHc60KgHaHa?pid=ImgDet&w=179&h=179&c=7&dpr=2" alt="recipt" style="max-width: 59px;">
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
