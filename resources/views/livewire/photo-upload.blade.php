<div
    class="w-full max-w-5xl p-4 min-h-[500px] py-8 mx-auto space-y-4 bg-white rounded-md shadow lg:py-12 xl:max-w-6xl overflow-y-auto">
    <div class="relative">
        @if(session('status'))
        <p class="p-2 my-2 font-medium text-green-600 border border-green-600 rounded-md mxa-w-xs bg-green-50 ">
            <span>{{ session('status') }}</span>
        </p>
        @endif
        <div class="flex items-center justify-between px-3 py-2 mb-4 border rounded-md bg-gray-50">
            <a href="/" class="text-2xl font-bold text-center capitalize">HomePage</a>
            <a href="{{ route('users') }}"
                class="px-4 py-2 font-medium text-gray-700 bg-gray-200 border rounded hover:bg-gray-300">Back to
                Users</a>
        </div>
        <div class="flex flex-col justify-center max-w-xs p-8 mx-auto space-y-3 text-center border rounded-lg shadow">
            @if ($image)
            <img src="{{ $image->temporaryUrl() }}" alt="{{ $user->name }}"
                class="inline-block object-cover w-24 h-24 mx-auto rounded-full shadow-sm">
            @elseif($user->profile->image)
            <img src="{{ asset('storage/'. $user->profile->image) }}" alt="{{ $user->name }}"
                class="inline-block object-cover w-24 h-24 mx-auto rounded-full shadow-sm">
            @else
            <img src="{{ asset('img/avatar.png') }}" alt="{{ $user?->name }}"
                class="inline-block object-cover w-24 h-24 mx-auto rounded-full shadow-sm">
            @endif
            <p class="text-xl font-semibold ">{{ $user->name }}</p>
            <p class="text-gray-500">{{ $user->email }}</p>
            <p class="text-gray-500">{{ $user->image }}</p>
        </div>
        <form wire:submit.prevent="uploadImage" class="max-w-xs py-4 mx-auto space-y-2">
            <div class="w-full">
                <input type="file" wire:model="image" id="" class="max-w-xs p-2 border rounded-md">
                @error('image')
                <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div> <br>
            <button class="block px-4 py-2 mx-auto text-sm text-white bg-green-600 rounded-lg">Upload</button>
        </form>
    </div>

</div>