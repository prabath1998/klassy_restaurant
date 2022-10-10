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
                            Phone
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Guests
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Date
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Time
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Message
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
                        <td class="py-4 px-6">
                            {{ $data->phone }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $data->guest }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $data->date }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $data->time }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $data->message }}
                        </td>

                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>


    </div>
    <!-- main-panel ends -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.admin_scripts')
</body>

</html>
