<script src="https://cdn.tailwindcss.com"></script>
<div class="h-screen md:flex">
    <div
        class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 i justify-around items-center hidden">
        <div>
            <h1 class="text-white font-bold text-4xl font-sans">Wedding Elektronik Salesman Program</h1>
            <p class="text-white mt-1">
                Vendor - Vendor Terbaik untuk user lending terpopuler di Kota Jambi</p>
            <a href="{{url('/')}}"
                class=" block w-28 bg-white text-indigo-800 text-center mt-4 py-2 rounded-2xl font-bold mb-2">Read
                More</a>

        </div>
        <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
    </div>
    <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
        <x-jet-validation-errors class="mb-4" />


        <form class="bg-white" method="POST" action="{{ route('register') }}">
            @csrf
            <h1 class="text-gray-800 font-bold text-2xl mb-1">Halo Selamat Datang !</h1>
            <p class="text-sm font-normal text-gray-600 mb-7">Silahkan Registrasi terlebih Dahulu</p>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                        clip-rule="evenodd" />
                </svg>
                <input class="pl-2 outline-none border-none" type="text" name="name" id="name" placeholder="Full name"
                    :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                </svg>
                <input class="pl-2 outline-none border-none" type="text" name="username" id="username"
                    placeholder="Username" :value="old('username')" required />
            </div>

            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                </svg>
                <input class="pl-2 outline-none border-none" type="text" name="email" id="email"
                    placeholder="Email Address" :value="old('email')" required />
            </div>

            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">

                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 24 24" data-name="Layer 1"
                    width="24px" height="20px" class="text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 9a1 1 0 0 1 1-1h1v-1a1 1 0 0 1 2 0v1h1a1 1 0 0 1 0 2h-1v1a1 1 0 0 1 -2 0v-1h-1a1 1 0 0 1 -1-1zm7 5h-8a1 1 0 0 0 0 2h8a1 1 0 0 0 0-2zm-4 4h-4a1 1 0 0 0 0 2h4a1 1 0 0 0 0-2zm9-11v12a5.006 5.006 0 0 1 -5 5h-8a5.006 5.006 0 0 1 -5-5v-12a5.006 5.006 0 0 1 5-5h.171a3.006 3.006 0 0 1 2.829-2h2a3.006 3.006 0 0 1 2.829 2h.171a5.006 5.006 0 0 1 5 5zm-2 0a3 3 0 0 0 -3-3h-1a1 1 0 0 1 -1-1 1 1 0 0 0 -1-1h-2a1 1 0 0 0 -1 1 1 1 0 0 1 -1 1h-1a3 3 0 0 0 -3 3v12a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3z" />
                </svg>
                <input class="pl-2 outline-none border-none" type="number" name="age" id="age" placeholder="Umur Kamu"
                    :value="old('age')" required />
            </div>

            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">

                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24"
                    width="24px" height="20px" class="text-gray-400" stroke="currentColor">
                    <path
                        d="M12,0A11,11,0,0,0,4.25,18.806l3.943,3.641a5.442,5.442,0,0,0,7.593.02l3.992-3.689A11,11,0,0,0,12,0Zm6.392,17.337-3.984,3.681A3.513,3.513,0,0,1,9.571,21L5.636,17.364A9,9,0,1,1,21,11,8.922,8.922,0,0,1,18.392,17.337ZM16.71,7.663l-3-2.081a3.008,3.008,0,0,0-3.42,0l-3,2.081A3,3,0,0,0,6,10.128V13.5A2.5,2.5,0,0,0,8.5,16h7A2.5,2.5,0,0,0,18,13.5V10.128A3,3,0,0,0,16.71,7.663ZM16,13.5a.5.5,0,0,1-.5.5H14V12a1,1,0,0,0-1-1H11a1,1,0,0,0-1,1v2H8.5a.5.5,0,0,1-.5-.5V10.128a1,1,0,0,1,.43-.822l3-2.081a1.006,1.006,0,0,1,1.14,0l3,2.081a1,1,0,0,1,.43.822Z" />
                </svg>
                <input class="pl-2 outline-none border-none" type="text" name="address" id="address"
                    placeholder="Alamat Kamu" :value="old('address')" required />
            </div>

            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="20px" viewBox="0 0 18 20" version="1.1">
                    <!-- Generator: Sketch 52.5 (67469) - http://www.bohemiancoding.com/sketch -->
                    <title>date_range</title>
                    <desc>Created with Sketch.</desc>
                    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Rounded" transform="translate(-307.000000, -244.000000)">
                            <g id="Action" transform="translate(100.000000, 100.000000)">
                                <g id="-Round-/-Action-/-date_range" transform="translate(204.000000, 142.000000)">
                                    <g>
                                        <polygon id="Path" points="0 0 24 0 24 24 0 24" />
                                        <path
                                            d="M19,4 L18,4 L18,3 C18,2.45 17.55,2 17,2 C16.45,2 16,2.45 16,3 L16,4 L8,4 L8,3 C8,2.45 7.55,2 7,2 C6.45,2 6,2.45 6,3 L6,4 L5,4 C3.89,4 3.01,4.9 3.01,6 L3,20 C3,21.1 3.89,22 5,22 L19,22 C20.1,22 21,21.1 21,20 L21,6 C21,4.9 20.1,4 19,4 Z M19,19 C19,19.55 18.55,20 18,20 L6,20 C5.45,20 5,19.55 5,19 L5,9 L19,9 L19,19 Z M7,11 L9,11 L9,13 L7,13 L7,11 Z M11,11 L13,11 L13,13 L11,13 L11,11 Z M15,11 L17,11 L17,13 L15,13 L15,11 Z"
                                            id="🔹Icon-Color" fill="#1D1D1D" />
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <input class="pl-2 outline-none border-none" type="date" name="tgl_lahir" id="tgl_lahir"
                    placeholder="Tanggal Lahir" :value="old('tgl_lahir')" required />
            </div>

            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24"
                    width="24px" height="20px" version="1.1">
                    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Outlined" transform="translate(-717.000000, -2503.000000)">
                            <g id="Hardware" transform="translate(100.000000, 2404.000000)">
                                <g id="Outlined-/-Hardware-/-phone_iphone" transform="translate(612.000000, 98.000000)">
                                    <g>
                                        <polygon id="Path" points="0 0 24 0 24 24 0 24" />
                                        <path
                                            d="M15.5,1 L7.5,1 C6.12,1 5,2.12 5,3.5 L5,20.5 C5,21.88 6.12,23 7.5,23 L15.5,23 C16.88,23 18,21.88 18,20.5 L18,3.5 C18,2.12 16.88,1 15.5,1 Z M11.5,22 C10.67,22 10,21.33 10,20.5 C10,19.67 10.67,19 11.5,19 C12.33,19 13,19.67 13,20.5 C13,21.33 12.33,22 11.5,22 Z M16,18 L7,18 L7,4 L16,4 L16,18 Z"
                                            id="🔹-Icon-Color" fill="#1D1D1D" />
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <input class="pl-2 outline-none border-none" type="text" name="phone" id="phone"
                    placeholder="No Telephone" :value="old('phone')" required />
            </div>

            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                        clip-rule="evenodd" />
                </svg>
                <input class="pl-2 outline-none border-none" type="password" name="password" id="password"
                    placeholder="Password" required autocomplete="new-password" />
            </div>

            <div class="flex items-center border-2 py-2 px-3 pb-3 rounded-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                        clip-rule="evenodd" />
                </svg>
                <input class="pl-2 outline-none border-none" type="password" name="password_confirmation"
                    id="password_confirmation" placeholder="Comfrim Password" required autocomplete="new-password" />
            </div>


            <a class="underline text-sm text-gray-600 hover:text-gray-900 py-2 px-3" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <button type="submit"
                class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">
                {{ __('Register') }}</button>

        </form>
    </div>
</div>
