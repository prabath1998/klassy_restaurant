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
    </div>
    <!-- main-panel ends -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.admin_scripts')
</body>

</html>
