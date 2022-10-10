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

        {{-- chefs form --}}
        <div class="container mx-auto">
            <div class="max-w-xl p-5 mx-auto my-10 bg-slate-800 rounded-md shadow-sm">
                <div class="text-center">
                    <h1 class="my-3 text-3xl font-semibold text-gray-200">Add Chefs</h1>

                </div>
                <div>
                    <form action="{{ url('/uploadchef') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm text-gray-200">Name</label>
                            <input type="text" name="name" placeholder="Alex Roberts" required
                                class="w-full px-3 py-2 placeholder-gray-300 border text-gray-600 border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                        </div>
                        <div class="mb-6">
                            <label for="speciality" class="block mb-2 text-sm text-gray-200">Speciality</label>
                            <input type="text" name="speciality" placeholder="Burgers" required
                                class="w-full px-3 py-2 placeholder-gray-300 border text-gray-600 border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                        </div>
                        <div class="mb-6">


                            <label class="block mb-2 text-sm font-medium text-gray-200" for="file_input">Image</label>
                            <input
                                class="block w-full text-sm px-3 py-2 text-gray-900 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-200 focus:outline-none dark:placeholder-gray-400"
                                id="file_input" type="file" name="image" required>

                        </div>

                        <div class="mb-6">
                            <button type="submit"
                                class="w-full px-2 py-2 text-white bg-violet-500 rounded-md  focus:bg-violet-600 focus:outline-none">
                                Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        {{-- chefs data table --}}
        <div class="container mx-auto">
            <div class="overflow-x-auto relative m-12">
                <table class="w-full text-sm text-left text-gray-300 dark:text-gray-300">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="bg-slate-800">
                            <th scope="col" class="py-3 px-6">
                                Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Speciality
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Image
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
                                {{ $data->speciality }}
                            </td>

                            <td class="py-4 px-6">
                                <img src="chefimage/{{ $data->image }}" alt="" height="100" width="100">
                            </td>

                            <td class="py-4 px-6 flex">
                                <a href="{{ url('/updatechef',$data->id) }}">
                                    <button
                                        class="bg-violet-500 hover:bg-violet-700 text-white font-bold py-2 px-4 rounded">
                                        Edit
                                    </button>
                                </a>
                                <a href="">
                                    <button
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-3">
                                        Delete
                                    </button>
                                </a>
                            </td>
                        </tr>
                        @endforeach




                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- plugins:js -->
    @include('admin.admin_scripts')
</body>

</html>
