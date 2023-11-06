<section>
    <header style="text-align: center;">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6 tp-donations-details" style="width: 80%; margin: 0 auto;">
        @csrf
        @method('put')

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group">
            <x-input-label for="current_password" :value="__('Current Password')" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
            <x-input-label for="password" :value="__('New Password')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button style="margin: 0 auto; display: block; background-color: #39c060; border-color: #e9bf3d; color: white; padding: 0 20px;">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <br>
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600" 
                    style="color: green; text-align: center;"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
