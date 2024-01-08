<x-layout.mylayout>
<script src="{{ asset('js/smartcontract.js') }}" ></script>
@include('layouts.navigation')
<header class="bg-white dark:bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        Alcohol Entry  
    </div>
</header>
 <x-content>
   
        <x-connection-transcation-info/>
        <livewire:form-inputs-for-alcohol-details/>
        
</x-content>

</x-layout.mylayout>