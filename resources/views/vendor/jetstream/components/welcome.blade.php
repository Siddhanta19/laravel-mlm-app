<section>
    <!-- welcome card -->
    <div class="card mx-auto bg-base-300 shadow-xl">
        <div class="card-body items-center space-y-4">
            <h2 class="card-title items-center justify-center text-3xl">
                Welcome, {{ Auth::user()->name }} 🥰
            </h2>
            <div class="info space-y-1">

                @if (Auth::user()->active_status === 0)
                    {!! ' <!-- The button to open modal --><label class="btn-primary btn" for="view-instructions">View Instructions</label>

                                                                                                                                                                                                                                                                                                                                                                                                                                    <!-- Put this part before </body> tag --><input class="modal-toggle" id="view-instructions" type="checkbox" />
                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="modal">
                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="modal-box">
                                                                                                                                                                                                                                                                                                                                                                                                                                            <h1 class="my-5 text-2xl font-semibold">Follow The Steps To
                                                                                                                                                                                                                                                                                                                                                                                                                                                Start Earning 👉🏻</h1>
                                                                                                                                                                                                                                                                                                                                                                                                                                            <ul class="font max-w-md list-inside list-disc space-y-2 text-xl">
                                                                                                                                                                                                                                                                                                                                                                                                                                                <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                    Add <span class="font-bold">₹100</span> in your Wallet.
                                                                                                                                                                                                                                                                                                                                                                                                                                                </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                <li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                    Now, Contact Us to Activate your Account.
                                                                                                                                                                                                                                                                                                                                                                                                                                                </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                            </ul>

                                                                                                                                                                                                                                                                                                                                                                                                                                            <p class="mt-10 leading-7">Get ₹10 Passive Income Every Single Day. <br>You can also
                                                                                                                                                                                                                                                                                                                                                                                                                                                Refer &
                                                                                                                                                                                                                                                                                                                                                                                                                                                Earn by Your Refer Code.
                                                                                                                                                                                                                                                                                                                                                                                                                                                <br> <span class="font-bold">Activate & Check Back The Instructions Again.</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                            </p>



                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="modal-action">
                                                                                                                                                                                                                                                                                                                                                                                                                                                <label class="btn" for="view-instructions">Okey Dokey!</label>
                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>' !!}
                @else
                    {!! ' <!-- The button to open modal --><label class="btn-primary btn" for="view-instructions">View Instructions</label>

                                                                                                                                                                                                                            <!-- Put this part before </body> tag --><input class="modal-toggle" id="view-instructions" type="checkbox" />
                                                                                                                                                                                                                            <div class="modal">
                                                                                                                                                                                                                                <div class="modal-box">
                                                                                                                                                                                                                                    <h1 class="my-5 text-2xl font-semibold">Congratulations, You are Active! </h1>
                                                                                                                                                                                                                                    <ul class="font max-w-md list-inside list-disc space-y-2 text-xl">
                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                            You Earn <span class="font-bold">₹10</span> in your Wallet Everyday.
                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                            You Can Refer & Earn!
                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                    </ul>

                                                                                                                                                                                                                                    <p class="mt-10 leading-7">For Every Refer, Once They <span class="font-bold">Activate</span>
                                                                                                                                                                                                                                        their Account.
                                                                                                                                                                                                                                    </p>

                                                                                                                                                                                                                                    <div class="my-5 overflow-x-auto text-xl">
                                                                                                                                                                                                                                        <table class="table w-full">
                                                                                                                                                                                                                                            <!-- head --><thead>
                                                                                                                                                                                                                                                <tr>

                                                                                                                                                                                                                                                    <th>Level</th>
                                                                                                                                                                                                                                                    <th>Bonus</th>
                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                            </thead>
                                                                                                                                                                                                                                            <tbody>
                                                                                                                                                                                                                                                <!-- row 1 --><tr>

                                                                                                                                                                                                                                                    <td>1st</td>
                                                                                                                                                                                                                                                    <td>₹4</td>

                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                                <!-- row 2 --><tr>

                                                                                                                                                                                                                                                    <td>2nd to 7th</td>
                                                                                                                                                                                                                                                    <td>₹2</td>

                                                                                                                                                                                                                                                </tr>
                                                                                                                                                                                                                                            </tbody>
                                                                                                                                                                                                                                        </table>
                                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                                    <ul class="max-w-md space-y-2">
                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                            1st Level Refer - <br> Somebody Used Your Refer Code To Register.
                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                            2nd Level Refer - <br> Somebody Used Your 1st Level Referral\'s Refer Code To Register.
                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                    </ul>



                                                                                                                                                                                                                                    <div class="modal-action">
                                                                                                                                                                                                                                        <label class="btn" for="view-instructions">Okey Dokey!</label>
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                            </div>' !!}
                @endif
            </div>
        </div>
    </div>

    <!-- Wallet -->
    <div class="stats-vertical mb-10 mt-8">
        <div class="stat place-items-center gap-2">
            <div class="mb-2 text-2xl text-primary-content opacity-70">Account Balance</div>
            <div class="stat-value text-primary">₹{{ Auth::user()->wallet }}</div>
            <div class="stat-actions">
                <button class="btn-base btn-primary btn border-primary">Add funds</button>

                @if (Auth::user()->active_status === 1)
                    {!! '<a href="https://www.google.com"><button class="btn-base text-base btn">Withdraw</button></a>' !!}
                @else
                    {!! '<button class="btn-base bg-slate-800 btn text-base">Withdraw</button>' !!}
                @endif
            </div>
        </div>
    </div>



    <!-- USER ID -->
    <div class="mb-5 overflow-x-auto">
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
                            class="absolute w-20 rounded-sm bg-primary font-semibold leading-8 tracking-wider text-primary-content"
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
