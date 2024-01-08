<x-layout.mylayout>
@include('layouts.navigation')
 <x-content>
   
 @include('account.partials.update-account-information-form')
</x-content>
<script src="{{ asset('js/smartcontract.js') }}"></script>
</x-layout.mylayout>