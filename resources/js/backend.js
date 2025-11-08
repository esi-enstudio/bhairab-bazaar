// ১. সবার প্রথমে আমাদের নতুন vendor.js ফাইলটি ইম্পোর্ট করুন।
//    এটি jQuery এবং সব প্লাগইন প্রস্তুত করে দেবে।
import './vendor.js';


// ২. এখন আপনার টেমপ্লেটের বাকি JS ফাইলগুলো ইম্পোর্ট করুন,
//    যেগুলো jQuery-এর ওপর নির্ভরশীল নয়।
import './backend/feather.min.js';
import './backend/apexchart/apexcharts.min.js';
import './backend/apexchart/chart-data.js';
import './backend/chartjs/chart.min.js';
import './backend/chartjs/chart-data.js';


// ৩. সবশেষে, আপনার টেমপ্লেটের প্রধান script.js ফাইলটি ইম্পোর্ট করুন।
//    এই ফাইলটি চলার আগেই jQuery, select2, modal ইত্যাদি প্রস্তুত থাকবে।
import './backend/script.js';

console.log('Main application script (backend.js) initialized.');
