<x-app-layout>
    <div class="py-8">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg" style="max-width: 600px; margin: auto; margin-bottom: 20px;">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg" style="max-width: 600px; margin: auto; margin-bottom: 20px;">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg" style="max-width: 600px; margin: auto; margin-bottom: 20px;">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
