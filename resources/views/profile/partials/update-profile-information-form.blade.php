<section>
    <header style="text-align: center;">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6 tp-donations-details" style="width: 80%; margin: 0 auto;">
        @csrf
        @method('patch')


         {{-- @if ($user->provider == null) --}}
         @if ($user->provider)
             <h2 style="text-align: center;">Welcome, {{ $user->name }}</h2>
         @endif

        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>


        @if ($user->provider == null)

        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        @else
        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
            <h3><b>{{ __('Email') }}</b></h3>
            <p class="mt-1 text-sm text-gray-600">
            {{ __("$user->email") }}
        </p>
        </div>
        @endif
        <div class="flex items-center gap-4 mx-auto">
            <x-primary-button style="margin: 0 auto; display: block; background-color: #39c060; border-color: #e9bf3d; color: white; padding: 0 20px;">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
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
<style>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
  }

  th {
    background-color: #f2f2f2;
  }
</style>
