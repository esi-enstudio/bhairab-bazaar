<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AdminLogin extends Component
{
    // ফর্মের ইনপুট ফিল্ডগুলোর জন্য পাবলিক প্রপার্টি
    #[Rule('required|email', message: 'The email address is required.')]
    public string $email = '';

    #[Rule('required', message: 'The password is required.')]
    public string $password = '';

    public bool $remember = false;

    /**
     * ফর্ম সাবমিট হলে এই মেথডটি কল হবে।
     */
    public function login()
    {
        // রিয়েল-টাইম ভ্যালিডেশন
        $credentials = $this->validate();

        // ব্যবহারকারীকে লগইন করানোর চেষ্টা
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $user = Auth::user();

            // ব্যবহারকারীর 'Admin' রোল আছে কিনা তা পরীক্ষা করা
            if ($user->hasRole(['SuperAdmin','Admin'])) {
                request()->session()->regenerate();

                // সফল হলে অ্যাডমিন ড্যাশবোর্ডে রিডাইরেক্ট করা
                // navigate: true ব্যবহার করলে এটি SPA-এর মতো পেজ রিফ্রেশ ছাড়াই কাজ করবে
                return $this->redirect(route('admin.dashboard'));
            }

            // যদি ব্যবহারকারী অ্যাডমিন না হয়, তাহলে তাকে লগ আউট করে দেওয়া
            Auth::logout();
        }

        // যদি লগইন ব্যর্থ হয় বা ব্যবহারকারী অ্যাডমিন না হয়, তাহলে একটি এরর মেসেজ দেখানো
        $this->addError('email', 'The provided credentials do not match our records or you do not have admin access.');
    }

    /**
     * কম্পোনেন্টের ভিউ রেন্ডার করা।
     */
    public function render()
    {
        return view('livewire.auth.admin-login');
    }
}
