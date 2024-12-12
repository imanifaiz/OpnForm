<?php

return [
    'accepted' => ':attribute গ্রহণ করা আবশ্যক।',
    'active_url' => ':attribute একটি বৈধ URL নয়।',
    'after' => ':attribute অবশ্যই :date এর পরের একটি তারিখ হতে হবে।',
    'after_or_equal' => ':attribute অবশ্যই :date এর পরে বা সমান একটি তারিখ হতে হবে।',
    'alpha' => ':attribute শুধুমাত্র অক্ষর থাকতে পারে।',
    'alpha_dash' => ':attribute শুধুমাত্র অক্ষর, সংখ্যা, ড্যাশ এবং আন্ডারস্কোর থাকতে পারে।',
    'alpha_num' => ':attribute শুধুমাত্র অক্ষর এবং সংখ্যা থাকতে পারে।',
    'array' => ':attribute অবশ্যই একটি অ্যারে হতে হবে।',
    'before' => ':attribute অবশ্যই :date এর আগের একটি তারিখ হতে হবে।',
    'before_or_equal' => ':attribute অবশ্যই :date এর আগে বা সমান একটি তারিখ হতে হবে।',
    'between' => [
        'numeric' => ':attribute অবশ্যই :min এবং :max এর মধ্যে হতে হবে।',
        'file' => ':attribute অবশ্যই :min এবং :max কিলোবাইটের মধ্যে হতে হবে।',
        'string' => ':attribute অবশ্যই :min এবং :max অক্ষরের মধ্যে হতে হবে।',
        'array' => ':attribute অবশ্যই :min এবং :max আইটেমের মধ্যে হতে হবে।',
    ],
    'boolean' => ':attribute ক্ষেত্রটি সত্য বা মিথ্যা হতে হবে।',
    'confirmed' => ':attribute নিশ্চিতকরণ মেলে না।',
    'date' => ':attribute একটি বৈধ তারিখ নয়।',
    'date_equals' => ':attribute অবশ্যই :date এর সমান একটি তারিখ হতে হবে।',
    'date_format' => ':attribute ফরম্যাট :format এর সাথে মেলে না।',
    'different' => ':attribute এবং :other অবশ্যই আলাদা হতে হবে।',
    'digits' => ':attribute অবশ্যই :digits সংখ্যা হতে হবে।',
    'digits_between' => ':attribute অবশ্যই :min এবং :max সংখ্যার মধ্যে হতে হবে।',
    'dimensions' => ':attribute অবৈধ ছবির মাত্রা রয়েছে।',
    'distinct' => ':attribute ক্ষেত্রের একটি ডুপ্লিকেট মান রয়েছে।',
    'email' => ':attribute অবশ্যই একটি বৈধ ইমেইল ঠিকানা হতে হবে।',
    'ends_with' => ':attribute অবশ্যই নিম্নলিখিত একটি দিয়ে শেষ হতে হবে: :values।',
    'exists' => 'নির্বাচিত :attribute অবৈধ।',
    'file' => ':attribute অবশ্যই একটি ফাইল হতে হবে।',
    'filled' => ':attribute ক্ষেত্রের একটি মান থাকতে হবে।',
    'gt' => [
        'numeric' => ':attribute অবশ্যই :value এর চেয়ে বড় হতে হবে।',
        'file' => ':attribute অবশ্যই :value কিলোবাইটের চেয়ে বড় হতে হবে।',
        'string' => ':attribute অবশ্যই :value অক্ষরের চেয়ে বড় হতে হবে।',
        'array' => ':attribute এ অবশ্যই :value এর চেয়ে বেশি আইটেম থাকতে হবে।',
    ],
    'gte' => [
        'numeric' => ':attribute অবশ্যই :value এর চেয়ে বড় বা সমান হতে হবে।',
        'file' => ':attribute অবশ্যই :value কিলোবাইটের চেয়ে বড় বা সমান হতে হবে।',
        'string' => ':attribute অবশ্যই :value অক্ষরের চেয়ে বড় বা সমান হতে হবে।',
        'array' => ':attribute এ অবশ্যই :value বা তার বেশি আইটেম থাকতে হবে।',
    ],
    'image' => ':attribute অবশ্যই একটি ছবি হতে হবে।',
    'in' => 'নির্বাচিত :attribute অবৈধ।',
    'in_array' => ':attribute ক্ষেত্রটি :other এ বিদ্যমান নেই।',
    'integer' => ':attribute অবশ্যই একটি পূর্ণসংখ্যা হতে হবে।',
    'ip' => ':attribute অবশ্যই একটি বৈধ IP ঠিকানা হতে হবে।',
    'ipv4' => ':attribute অবশ্যই একটি বৈধ IPv4 ঠিকানা হতে হবে।',
    'ipv6' => ':attribute অবশ্যই একটি বৈধ IPv6 ঠিকানা হতে হবে।',
    'json' => ':attribute অবশ্যই একটি বৈধ JSON স্ট্রিং হতে হবে।',
    'lt' => [
        'numeric' => ':attribute অবশ্যই :value এর চেয়ে ছোট হতে হবে।',
        'file' => ':attribute অবশ্যই :value কিলোবাইটের চেয়ে ছোট হতে হবে।',
        'string' => ':attribute অবশ্যই :value অক্ষরের চেয়ে ছোট হতে হবে।',
        'array' => ':attribute এ অবশ্যই :value এর চেয়ে কম আইটেম থাকতে হবে।',
    ],
    'lte' => [
        'numeric' => ':attribute অবশ্যই :value এর চেয়ে ছোট বা সমান হতে হবে।',
        'file' => ':attribute অবশ্যই :value কিলোবাইটের চেয়ে ছোট বা সমান হতে হবে।',
        'string' => ':attribute অবশ্যই :value অক্ষরের চেয়ে ছোট বা সমান হতে হবে।',
        'array' => ':attribute এ অবশ্যই :value এর চেয়ে বেশি আইটেম থাকতে পারবে না।',
    ],
    'max' => [
        'numeric' => ':attribute :max এর চেয়ে বড় হতে পারবে না।',
        'file' => ':attribute :max কিলোবাইটের চেয়ে বড় হতে পারবে না।',
        'string' => ':attribute :max অক্ষরের চেয়ে বড় হতে পারবে না।',
        'array' => ':attribute এ :max এর চেয়ে বেশি আইটেম থাকতে পারবে না।',
    ],
    'mimes' => ':attribute অবশ্যই একটি :values ধরনের ফাইল হতে হবে।',
    'mimetypes' => ':attribute অবশ্যই একটি :values ধরনের ফাইল হতে হবে।',
    'min' => [
        'numeric' => ':attribute অবশ্যই :min এর চেয়ে বড় হতে হবে।',
        'file' => ':attribute অবশ্যই :min কিলোবাইটের চেয়ে বড় হতে হবে।',
        'string' => ':attribute অবশ্যই :min অক্ষরের চেয়ে বড় হতে হবে।',
        'array' => ':attribute এ অবশ্যই কমপক্ষে :min আইটেম থাকতে হবে।',
    ],
    'multiple_of' => ':attribute অবশ্যই :value এর গুণিতক হতে হবে',
    'not_in' => 'নির্বাচিত :attribute অবৈধ।',
    'not_regex' => ':attribute ফরম্যাট অবৈধ।',
    'numeric' => ':attribute অবশ্যই একটি সংখ্যা হতে হবে।',
    'password' => 'পাসওয়ার্ড ভুল।',
    'present' => ':attribute ক্ষেত্র অবশ্যই উপস্থিত থাকতে হবে।',
    'regex' => ':attribute ফরম্যাট অবৈধ।',
    'required' => ':attribute ক্ষেত্র আবশ্যক।',
    'required_if' => ':other :value হলে :attribute ক্ষেত্র আবশ্যক।',
    'required_unless' => ':other :values তে না থাকলে :attribute ক্ষেত্র আবশ্যক।',
    'required_with' => ':values উপস্থিত থাকলে :attribute ক্ষেত্র আবশ্যক।',
    'required_with_all' => ':values উপস্থিত থাকলে :attribute ক্ষেত্র আবশ্যক।',
    'required_without' => ':values উপস্থিত না থাকলে :attribute ক্ষেত্র আবশ্যক।',
    'required_without_all' => ':values কোনটিই উপস্থিত না থাকলে :attribute ক্ষেত্র আবশ্যক।',
    'same' => ':attribute এবং :other অবশ্যই মিলতে হবে।',
    'size' => [
        'numeric' => ':attribute অবশ্যই :size হতে হবে।',
        'file' => ':attribute অবশ্যই :size কিলোবাইট হতে হবে।',
        'string' => ':attribute অবশ্যই :size অক্ষর হতে হবে।',
        'array' => ':attribute এ অবশ্যই :size আইটেম থাকতে হবে।',
    ],
    'starts_with' => ':attribute অবশ্যই নিম্নলিখিত একটি দিয়ে শুরু হতে হবে: :values।',
    'string' => ':attribute অবশ্যই একটি বৈধ টেক্সট হতে হবে।',
    'timezone' => ':attribute অবশ্যই একটি বৈধ জোন হতে হবে।',
    'unique' => ':attribute ইতিমধ্যে নেওয়া হয়েছে।',
    'uploaded' => ':attribute আপলোড করতে ব্যর্থ হয়েছে।',
    'url' => ':attribute ফরম্যাট অবৈধ।',
    'uuid' => ':attribute অবশ্যই একটি বৈধ UUID হতে হবে।',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    'attributes' => [],

    'invalid_json' => 'অবৈধ ইনপুট। অনুগ্রহ করে সংশোধন করে আবার চেষ্টা করুন।',
];