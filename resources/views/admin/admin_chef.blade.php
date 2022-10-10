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
        <div class="max-w-xl p-5 mx-auto my-10 bg-slate-800 rounded-md shadow-sm">
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-gray-200">Add Chefs</h1>

            </div>
            <div>
                <form action="{{ url('/uploadfood') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm text-gray-200">Title</label>
                        <input type="text" name="title" placeholder="Alex Roberts" required
                            class="w-full px-3 py-2 placeholder-gray-300 border text-gray-600 border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        <label for="speciality" class="block mb-2 text-sm text-gray-200">Price</label>
                        <input type="number" name="speciality" placeholder="Burgers" required
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


    </div>
        <!-- plugins:js -->
    @include('admin.admin_scripts')
</body>

</html>
