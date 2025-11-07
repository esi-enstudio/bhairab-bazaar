// ====================================================================
// ধাপ ১: jQuery এবং Bootstrap এর মতো কোর লাইব্রেরি সেটআপ
// ====================================================================

// jQuery ইম্পোর্ট করা
import $ from 'jquery';

// jQuery কে গ্লোবাল window অবজেক্টে যুক্ত করা
// যাতে সব প্লাগইন (যেমন jQuery UI, Slick) এটিকে খুঁজে পায়
window.jQuery = window.$ = $;

// Bootstrap এর জাভাস্ক্রিপ্ট ইম্পোর্ট করা
// এটি jQuery-এর উপর নির্ভর করে (কিছু কম্পোনেন্টের জন্য)
import 'bootstrap';

// jQuery UI ইম্পোর্ট করা
// এটি এখন গ্লোবাল jQuery কে খুঁজে পাবে
import 'jquery-ui-dist/jquery-ui';


// ====================================================================
// ধাপ ২: অন্যান্য ভেন্ডর প্লাগইন ইম্পোর্ট করা
// ====================================================================

import 'slick-carousel/slick/slick.min.js';
import feather from 'feather-icons';
import 'lazysizes';
import { WOW } from 'wowjs';


// ====================================================================
// ধাপ ৩: আপনার থিমের কাস্টম জাভাস্ক্রিপ্ট ফাইলগুলো ইম্পোর্ট করা
// এখানে ফাইলের 순序 খুবই গুরুত্বপূর্ণ, script.js সাধারণত শেষে থাকে
// ====================================================================

import './frontend/bootstrap-notify.min.js';
import './frontend/slick-animation.min.js';
import './frontend/custom_slick.js';
import './frontend/auto-height.js';
import './frontend/timer1.js';
import './frontend/fly-cart.js';
import './frontend/quantity-2.js';
import './frontend/custom-wow.js';
import './frontend/script.js'; // প্রধান থিম স্ক্রিপ্ট


// ====================================================================
// ধাপ ৪: DOM লোড হওয়ার পর ইনিশিয়ালাইজেশন কোড চালানো
// ====================================================================

document.addEventListener('DOMContentLoaded', () => {
    // Feather আইকন চালু করা
    // এটি DOM-এ থাকা `data-feather` অ্যাট্রিবিউটগুলোকে আইকনে পরিণত করে
    feather.replace();

    // WOW.js অ্যানিমেশন চালু করা
    new WOW().init();
});
