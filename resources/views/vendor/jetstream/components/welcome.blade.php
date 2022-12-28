<section>
    <!-- welcome card -->
    <div class="card mx-auto bg-base-300 shadow-xl">
        <div class="card-body items-center space-y-4">
            <h2 class="card-title items-center justify-center text-2xl">
                Welcome, {{ Auth::user()->name }} 🥰
            </h2>
            <div class="info space-y-1">
                {{-- <p>Get <span class="font-bold">₹10</span> Every Single Day</p> --}}
                @if (Auth::user()->active_status === 0)
                    {!! '<p>Add Funds <span class="font-bold">₹100</span> & Activate Your ID</p>' !!}
                @else
                    {!! 'Refer & Earn' !!}
                @endif
            </div>
        </div>
    </div>

    <!-- Wallet -->
    <div class="stats-vertical my-12">
        <div class="stat place-items-center gap-2">
            <div class="mb-2 text-2xl text-primary-content opacity-70">Account Balance</div>
            <div class="stat-value text-primary">₹{{ Auth::user()->wallet }}</div>
            <div class="stat-actions">
                <button class="btn-base btn-primary btn border-primary">Add funds</button>

                @if (Auth::user()->active_status === 1)
                    {!! '<button class="btn-base text-base btn"><a href="https://www.google.com">Withdraw</a></button>' !!}
                @else
                    {!! '<button class="btn-base bg-slate-800 btn text-base">Withdraw</button>' !!}
                @endif
            </div>
        </div>
    </div>



    <!-- USER ID -->
    <div class="overflow-x-auto">
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th></th>
                    <th>Status</th>
                    <th>Refer-Code</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                <tr>
                    <th>👉</th>
                    <td>
                        @if (Auth::user()->active_status === 0)
                            {!! 'INACTIVE' !!}
                        @else
                            {!! 'ACTIVE' !!}
                        @endif
                    </td>
                    <td>

                        <button
                            class="absolute w-20 rounded-sm bg-primary font-semibold tracking-wider text-primary-content"
                            id="copy-message">
                        </button>

                        <a class="link-info link"
                            data-clipboard-text="{{ Auth::user()->my_refer_code }}">{{ Auth::user()->my_refer_code }}</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


</section>
