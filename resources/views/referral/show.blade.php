<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Referral Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4">
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th></th>
                                <th>Active Status</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Total Refers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Loop through the referred users and display the data -->
                            @foreach ($referredUsers as $referredUser)
                                <tr class="hover">
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $referredUser->active_status == 0 ? '😷Inactive' : '🥳Active' }}</td>
                                    <td>{{ $referredUser->name }}</td>
                                    <td>{{ $referredUser->email }}</td>
                                    <td>{{ $referredUser->refer_count }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
