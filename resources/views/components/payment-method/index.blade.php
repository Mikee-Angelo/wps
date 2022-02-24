@section('title', 'Payment Methods')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payment Method') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 auto-rows-auto">

                           <div class=" bg-white overflow-hidden shadow-sm sm:rounded-lg   ">
                    <div class="flex p-6 bg-white border-b border-gray-200  h-full items-center">
                        <img class="mx-auto h-fit" src="{{ asset('img/gcash.png') }}" alt="Paymaya Logo">
                    </div>
                </div>
                 <div class=" bg-white overflow-hidden shadow-sm sm:rounded-lg  ">
                    <div class="flex p-6 bg-white border-b border-gray-200  h-full items-center">
                        <img class="mx-auto h-fit" src="{{ asset('img/paymaya.png') }}" alt="Paymaya Logo">
                    </div>
                </div>

                 <div class=" bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                    <div class="flex p-6 bg-white border-b border-gray-200 h-full items-center">
                        <img class="mx-auto h-fit" src="{{ asset('img/grab-pay.png') }}" alt="Grabpay Logo">
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
