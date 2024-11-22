<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('supervisors', absolute: false), navigate: true);
    }
}; ?>


<div class="authentication-wrapper authentication-cover">
    <a href="javascript:void(0)" class="auth-cover-brand d-flex align-items-center gap-2">
        <span class="app-brand-logo demo">
            <img src="{{ asset('assets/img/brand/logo.png') }}" style="width:50px; height:50px;" alt="logo">
        </span>
        <span class="app-brand-text demo text-heading fw-bold cairo-bold">Siraj Almarafa</span>
    </a>
    <div class="authentication-inner row m-0">
        <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center justify-content-center">
            <img src="{{ asset('assets/img/illustrations/auth-verify-email-illustration-light.png') }}"
                class="auth-cover-illustration w-100" alt="auth-illustration" />
            <img src="{{ asset('assets/img/illustrations/auth-cover-login-mask-light.png') }}"
                class="authentication-image" alt="mask" />
        </div>
        <div
            class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-5 px-4 py-4">
            <div class="w-px-400 mx-auto pt-5 pt-lg-0">
                <h4 class="mb-2 cairo-bold">SIT Dashboard Panel</h4>
                <p class="mb-4 cairo-semi-bold">Design by Siraj Al-marafa Company</p>
                <form class="mb-3" wire:submit="login">
                    @csrf
                    <div class="form-floating form-floating-outline mb-3">
                        <input type="email" class="form-control" id="email" name="email"
                            wire:model="form.email" placeholder="Enter your email" autofocus />
                        <label for="email">Email</label>
                        @error('form.email')
                            <p class="error text-danger cairo-semi-bold">
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="form-password-toggle">
                            <div class="input-group input-group-merge">
                                <div class="form-floating form-floating-outline">
                                    <input type="password" id="password" class="form-control" name="password"
                                        wire:model="form.password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <label for="password">Password</label>
                                </div>
                                <span class="input-group-text cursor-pointer"><i
                                        class="mdi mdi-eye-off-outline"></i></span>
                            </div>
                            @error('form.password')
                                <p class="error text-danger cairo-semi-bold">
                                    {{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember-me"
                                wire:model="form.remember" />
                            <label class="form-check-label" for="remember-me"> Remember Me </label>
                        </div>
                    </div>
                    <button class="btn btn-primary d-grid w-100">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>

