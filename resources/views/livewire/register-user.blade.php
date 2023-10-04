<div
    class="w-full max-w-5xl p-4 min-h-[500px] py-8 mx-auto space-y-4 bg-white rounded-md shadow lg:py-12 xl:max-w-6xl overflow-y-auto">
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold text-center capitalize">Technical Assesssment from automatepro</h1>
        <a href="/" class="px-4 py-2 font-medium text-gray-700 bg-gray-200 border rounded hover:bg-gray-300">Back</a>
    </div>
    <div class="grid w-full h-full grid-cols-1 gap-4 pb-4 overflow-y-auto">
        <div class="">
            <input type="search" wire:model.live.debounce.500ms="query"
                class="border rounded shadow outline-0 ring-0 focus:outline-0 focus:ring-0 focus:border-2"
                placeholder="search user here">
        </div>
        <table class="w-full border rounded">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-4 text-left">No</th>
                    <th class="p-4 text-left">Image</th>
                    <th class="p-4 text-left">Name</th>
                    <th class="p-4 text-left">Email</th>
                    <th class="p-4 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr class="even:bg-gray-100" wire:key='{{ $user->id }}'>
                    <td class="p-4">{{ $loop->iteration }}</td>
                    <td class="p-4">
                        <img class="object-cover rounded-full h-14 w-14"
                            src="{{ $user->profile->image ? asset('storage/'.$user->profile->image) : asset('img/avatar.png') }}"
                            alt="">
                    </td>
                    <td class="p-4">{{ $user->name }}</td>
                    <td class="p-4">{{ $user->email }}</td>
                    <td class="p-4">
                        <a href="{{ route('upload', $user->id) }}"
                            class="px-3 py-1 text-sm text-white bg-blue-600 rounded">Upload Image</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>No user in the system yet</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div>
            <p>{{ $users->links() }}</p>
        </div>
    </div>
</div>