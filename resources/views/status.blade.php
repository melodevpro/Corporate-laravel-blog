<x-app-layout>
    <x-container>

        <h2 class="text-lg mb-4 text-gray-500">Friends request</h2>
        @foreach ($requests as $user)
        <x-card class="mb-4">
            <div class="flex justify-between">
                {{ $user->name }}
                <x-submit-button>Confirm</x-submit-button>
            </div>
        </x-card>
        @endforeach

        <h2 class="text-lg mb-4 text-gray-500">Sent request</h2>
        @foreach ($sent as $user)
        <x-card class="mb-4">
            {{ $user->name }}
        </x-card>
        @endforeach

        <h2 class="text-lg mb-4 text-gray-500">Friends</h2>
        @foreach ($friends as $user)
        <x-card class="mb-4">
            {{ $user->name }}
        </x-card>
        @endforeach

    </x-container>
</x-app-layout>
