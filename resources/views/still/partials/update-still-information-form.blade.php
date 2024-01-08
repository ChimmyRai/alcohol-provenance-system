<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
           Still Information
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
           Update your profile's still information
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('still.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        

        <div>
            <x-input-label for="acountname">Business Name (Account)</x-input-label>
            <x-text-input id="acountname" name="acountname" type="text" class="" :value="old('acountname',$account->acountname)" required autofocus autocomplete="acountname" />
            <x-input-error class="mt-2" :messages="$errors->get('acountnamename')" />
        </div>

        <div>
            <x-input-label for="businessnumber">Australian Business Number</x-input-label>
            <x-text-input id="businessnumber" name="businessnumber" type="text" class="mt-1 block w-full" :value="old('firstname',$account->businessnumber)" required autofocus autocomplete="businessnumber" />
            <x-input-error class="mt-2" :messages="$errors->get('businessnumber')" />
        </div>

        <div>
            <x-input-label for="businessAddress">Address</x-input-label>
            <x-text-input id="businessAddress" name="businessAddress" type="text" class="mt-1 block w-full" :value="old('firstname',$account->businessAddress)" required autofocus autocomplete="businessAddress" />
            <x-input-error class="mt-2" :messages="$errors->get('businessAddress')" />
        </div>

        <div>
            <x-input-label for="accountStatus">Account Status</x-input-label>
            <x-text-input id="accountStatus" name="accountStatus" type="text" class="mt-1 block w-full" :value="old('firstname',$account->accountStatus)" required autofocus autocomplete="accountStatus" />
            <x-input-error class="mt-2" :messages="$errors->get('accountStatus')" />
        </div>

       
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
