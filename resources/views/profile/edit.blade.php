<x-frontend.layouts.master>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <!--  -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                <form method="post" action="{{ route('user.update',['user'=>Auth::user()->id]) }}" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')
                    <div>

                        <label for="image">Image{{Auth::user()->id}}</label>
                        <input type="file" name="image" id="image" class="mt-1 block w-full" required>
                        <x-input-error class="mt-2" :messages="$errors->get('image')" />
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit">save</button>
                    </div>
                </form>
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-frontend.layouts.master>
