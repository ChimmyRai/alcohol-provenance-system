<x-layout.mylayout>
    
<x-content>

    <x-form-inputs-to-get-alcohol-details/>
        <div class="inline-flex items-center justify-center w-full">
            <hr class="w-64 h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <span class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900">or</span>
        </div>
    <x-scan-q-r-to-get-details-input/>     
    <x-alcohol-info-display-modal/>
    <x-alcohol-retrievel-err-modal/>

</x-content>

<script src="{{ asset('js/smartcontract2.js') }}"></script>
</x-layout.mylayout>