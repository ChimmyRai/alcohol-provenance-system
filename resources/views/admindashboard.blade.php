<x-layout.mylayout>


@include('layouts.navigation')
<header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        Accounts 
                    </div>
                </header>
 <x-content>
   
    <livewire:account-list/>
</x-content>

</x-layout.mylayout>