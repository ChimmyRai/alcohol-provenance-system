<x-layout.mylayout>


@include('layouts.navigation')
<header class="bg-white dark:bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        Manage Stills  
    </div>
</header>

<x-content>


        <livewire:still-list/>
</x-content>

</x-layout.mylayout>