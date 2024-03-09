<div class="min-h-screen bg-gray-100">
    @include('includes.header')
    @include('includes.sidebar')

    <!-- Content -->
    <div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:ps-72">
        <div class="flex flex-col bg-white shadow-sm rounded-xl dark:bg-gray-100 dark:shadow-slate-700/[.7]">
            {{ $slot }}
        </div>

    </div>
    <!-- End Content -->


</div>
