@section('title', 'Payments')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap hover:table-auto">
                        <thead>
                            <tr class="text-center">
                                <th class="border px-6 py-4">Statement</th>
                                <th class="border px-6 py-4">Name</th>
                                <th class="border px-6 py-4">Amount</th>
                                <th class="border px-6 py-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)

                            <tr>
                                <td class="border px-6 py-4">{{$payment->statement_descriptor}}</td>
                                <td class="border px-6 py-4">Malcolm Lockyer</td>
                                <td class="border px-6 py-4">₱ {{$payment->amount}}</td>
                                <td class="text-center border px-6 py-4">
                                    <a href="#"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        View
                                    </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
