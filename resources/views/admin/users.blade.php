<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>



    <x-app-layout>

    </x-app-layout>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        @include('admin.admin_css')
    </head>

    <body>
        <div class="container-scroller">
            @include("admin.navbar")


            <div class="container mx-auto">
                <div class="overflow-x-auto relative m-12">
                    <table class="w-full text-sm text-left text-gray-300 dark:text-gray-300">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="bg-slate-800">
                                <th scope="col" class="py-3 px-6">
                                    Name
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Email
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Action
                                </th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data as $data)
                            <tr class="bg-slate-800 border-b dark:bg-gray-800 dark:border-gray-700">

                                <td class="py-4 px-6">
                                    {{ $data->name }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $data->email }}
                                </td>
                                @if ($data->usertype == "0")
                                <td class="py-4 px-6">
                                    <a href="{{ url('/deleteuser',$data->id) }}">
                                        <button
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            Delete
                                        </button>
                                    </a>
                                </td>
                                @else
                                <td class="py-4 px-6">
                                    <h6 class="text-red-500">Not allowed</h6>
                                </td>
                                @endif

                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>




        </div>
        @include('admin.admin_scripts')
    </body>

    </html>




</body>

</html>
