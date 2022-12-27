<section>
    <!-- Wallet -->
    <div class="stats-vertical mb-12 bg-base-100 text-primary-content">
        <div class="stat place-items-center gap-4">
            <div class="mb-2 text-2xl opacity-70">Account Balance</div>
            <div class="stat-value">₹{{ Auth::user()->wallet }}</div>
            <div class="stat-actions">
                <button class="btn-success btn-sm btn text-base">Add funds</button>

                @if (Auth::user()->active_status === 1)
                    {!! '<button class="btn-sm text-base btn"><a href="https://www.google.com">Withdraw</a></button>' !!}
                @else
                    {!! '<button class="btn-sm btn  text-base">Withdraw</button>' !!}
                @endif
            </div>
        </div>
    </div>

    <div class="divider"> </div>
    <!-- welcome card -->
    <div class="card mx-auto w-96 rounded-xl bg-black shadow-xl">
        <div class="card-body items-center space-y-4">
            <h2 class="card-title items-center justify-center text-2xl">
                Welcome, {{ Auth::user()->name }} 🥰
            </h2>
            <div class="info space-y-1">
                {{-- <p>Get <span class="font-bold">₹10</span> Every Single Day</p> --}}
                @if (Auth::user()->active_status === 0)
                    {!! '<p>Start by Adding <span class="font-bold">₹100</span> & Activate Your ID</p>' !!}
                @else
                    {!! 'Refer Others | Get Daily Income' !!}
                @endif
            </div>
        </div>
    </div>

    <div class="divider"> </div>

    <!-- USER ID -->
    <div class="mt-12 overflow-x-auto">
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th></th>
                    <th>ID-Status</th>
                    <th>Refer-Code</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                <tr>
                    <th>👉</th>
                    <td>
                        @if (Auth::user()->active_status === 0)
                            {!! 'Inactive' !!}
                        @else
                            {!! 'Active' !!}
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
