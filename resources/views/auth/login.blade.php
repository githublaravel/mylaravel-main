@extends('layouts.user.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/login&register.css') }}">
@endsection

@section('body')
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="col-md-6 col-12 border-1 rounded-end" style="">
                <div class="form-container position-absolute top-50 start-50 translate-middle"
                    style="direction: rtl; text-align: right;font-family: 'IRANSans', sans-serif;">
                    <p class="title">ورود به حساب کاربری</p>
                    <form class="form">
                        <input type="email" class="input" placeholder="ایمیل" required>
                        <input type="password" class="input" placeholder="رمز عبور" required>
                        <p class="page-link">
                            <span class="page-link-label">رمز عبور را فراموش کرده‌اید؟</span>
                        </p>
                        <button class="form-btn">ورود</button>
                    </form>
                    <p class="sign-up-label">
                        حساب کاربری ندارید؟<a href="http://127.0.0.1:8000/auth/register"><span class="sign-up-link">ثبت‌نام</span></a>
                    </p>
                    <div class="buttons-container">
                        <div class="google-login-button">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" x="0px" y="0px"
                                class="google-icon" viewBox="0 0 48 48" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="#FFC107"
                                    d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                </path>
                                <path fill="#FF3D00"
                                    d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                </path>
                                <path fill="#4CAF50"
                                    d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                </path>
                                <path fill="#1976D2"
                                    d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                </path>
                            </svg>
                            <span>ورود با گوگل</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-img border-1 rounded"
                style="background-image: url('{{ asset('image/form/form.jpg') }}')">
            </div>
        </div>
    </div>
@endsection
