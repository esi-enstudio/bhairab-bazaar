// ১. সবার আগে jQuery ইম্পোর্ট করুন এবং এটিকে গ্লোবাল করুন।
//    এটিই হবে আমাদের একমাত্র jQuery ইনস্ট্যান্স।
import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

// ২. এখন, এই গ্লোবাল jQuery-এর ওপর নির্ভরশীল সব প্লাগইন ইম্পোর্ট করুন।
//    এরা এখন window.jQuery-কে খুঁজে পাবে এবং নিজেদেরকে এর সাথে যুক্ত করবে।
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import 'select2';
import 'jquery-slimscroll';

// ৩. Daterangepicker-এর জন্য moment.js প্রস্তুত করুন।
import moment from 'moment';
window.moment = moment;
import 'bootstrap-daterangepicker';


// সব ভেন্ডর লাইব্রেরি সফলভাবে লোড হয়েছে তা নিশ্চিত করার জন্য একটি বার্তা।
console.log('Vendor libraries (jQuery, Bootstrap JS, Select2, etc.) loaded successfully.');
