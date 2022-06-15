<!DOCTYPE html>
<html lang="en">
    @include('head')
    <body>
        <div class="container mt-5">
            <div class="form">
                <h2>ログイン</h2>
                @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{Session::get('error')}}
                        @php
                            Session::forget('error');
                        @endphp
                    </div>
                @endif
                <form action="{{ route('loginPage') }}" method="POST" class="form-login">
                    @csrf
                    <!-- Email -->
                    <div class="form-field">
                        <input
                            type="email"
                            name="email"
                            id="email"
                            placeholder=" "
                            class="form-input"
                            required
                        />
                        <label for="email" class="form-label-login">メール</label>
                        @if ($errors->has('email'))
                            <span class="mt-2 text-danger">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <!-- password -->
                    <div class="form-field">
                        <input
                            type="password"
                            name="password"
                            id="password"
                            placeholder=" "
                            class="form-input form-pw"
                            required
                        />

                        <label for="password" class="form-label-login"
                            >パスワード</label
                        >
                        
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="eye eye-close h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"
                            />
                        </svg>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="eye eye-open hidden h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                            />
                        </svg>
                    </div>
                    @if ($errors->has('password'))
                            <span class="mb-2 text-danger">{{$errors->first('password')}}</span>
                        @endif

                    <!-- submit -->
                    <button class="button-submit" type="submit">ログイン</button>
                </form>
            </div>
        </div>

        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>