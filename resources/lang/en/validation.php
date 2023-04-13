<?php

return [
    'accepted' => ':attribute must be accepted.',
    'active_url' => ':attribute must be a valid URL.',
    'after' => ':attribute must be a date after :date.',
    'after_or_equal' => ':attribute must be a date after or equal to :date.',
    'alpha' => ':attribute may only contain letters.',
    'alpha_dash' => ':attribute may only contain letters, numbers, and dashes.',
    'alpha_num' => ':attribute may only contain letters and numbers.',
    'array' => ':attribute must be an array.',
    'before' => ':attribute must be a date before :date.',
    'before_or_equal' => ':attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => ':attribute must be between :min and :max.',
        'file' => ':attribute must be between :min and :max kilobytes.',
        'string' => ':attribute must be between :min and :max characters.',
        'array' => ':attribute must have between :min and :max items.',
    ],
    'boolean' => ':attribute must be true or false.',
    'confirmed' => ':attribute confirmation does not match.',
    'date' => ':attribute must be a valid date.',
    'date_equals' => ':attribute must be a date equal to :date.',
    'date_format' => ':attribute does not match the format :format.',
    'different' => ':attribute and :other must be different.',
    'digits' => ':attribute must be :digits digits.',
    'digits_between' => ':attribute must be between :min and :max digits.',
    'dimensions' => ':attribute has invalid image dimensions.',
    'distinct' => ':attribute field has a duplicate value.',
    'email' => ':attribute must be a valid email address.',
    'ends_with' => ':attribute must end with one of the following: :values',
    'exists' => 'The selected :attribute is invalid.',
    'file' => ':attribute must be a file.',
    'filled' => ':attribute field is required.',
    'gt' => [
        'numeric' => ':attribute must be greater than :value.',
        'file' => ':attribute must be larger than :value kilobytes.',
        'string' => ':attribute must be longer than :value characters.',
        'array' => ':attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => ':attribute must be :value or greater.',
        'file' => ':attribute must be :value kilobytes or larger.',
        'string' => ':attribute must be :value characters or longer.',
        'array' => ':attribute must have :value items or more.',
    ],
    'image' => ':attribute must be an image file.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => ':attribute field does not exist in :other.',
    'integer' => ':attribute must be an integer.',
    'ip' => ':attribute must be a valid IP address.',
    'ipv4' => ':attribute must be a valid IPv4 address.',
    'ipv6' => ':attribute must be a valid IPv6 address.',
    'json' => ':attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => ':attribute must be less than :value.',
        'file' => ':attribute must be smaller than :value kilobytes.',
        'string' => ':attribute must be shorter than :value characters.',
        'array' => ':attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => ':attribute must be less than or equal to :value.',
        'file' => ':attribute must be less than or equal to :value kilobytes.',
        'string' => ':attribute must be less than or equal to :value characters.',
        'array' => ':attribute must have :value items or less.',
    ],
    'max' => [
        'numeric' => ':attribute may not be greater than :max.',
        'file' => ':attribute may not be greater than :max kilobytes.',
        'string' => ':attribute may not be greater than :max characters.',
        'array' => ':attribute may not have more than :max items.',
    ],
    'mimes' => ':attribute must be a file of type: :values.',
    'mimetypes' => ':attribute must be a file of type: :values.',
    'min' => [
        'numeric' => ':attribute must be at least :min.',
        'file' => ':attribute must be at least :min kilobytes.',
        'string' => ':attribute must be at least :min characters.',
        'array' => ':attribute must have at least :min items.',
    ],
    'multiple_of' => ':attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => ':attribute format is invalid.',
    'numeric' => ':attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => ':attribute field must be present.',
    'regex' => ':attribute format is invalid.',
    'required' => ':attribute field is required.',
    'required_if' => ':attribute field is required when :other is :value.',
    'required_unless' => ':attribute field is required unless :other is in :values.',
    'required_with' => ':attribute field is required when :values is present.',
    'required_with_all' => ':attribute field is required when :values are present.',
    'required_without' => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'prohibited' => ':attribute field is prohibited.',
    'prohibited_if' => ':attribute field is prohibited when :other is :value.',
    'prohibited_unless' => ':attribute field is prohibited unless :other is in :values.',
    'same' => ':attribute and :other must match.',
    'size' => [
        'numeric' => ':attribute must be :size.',
        'file' => ':attribute must be :size kilobytes.',
        'string' => ':attribute must be :size characters.',
        'array' => ':attribute must contain :size items.',
    ],
    'starts_with' => ':attribute must start with one of the following: :values',
    'string' => ':attribute must be a string.',
    'timezone' => ':attribute must be a valid timezone.',
    'unique' => ':attribute has already been taken.',
    'uploaded' => ':attribute failed to upload.',
    'url' => ':attribute format is invalid.',
    'uuid' => ':attribute must be a valid UUID.',

    /*
|--------------------------------------------------------------------------
| Custom Validation Messages
|--------------------------------------------------------------------------
|
| In this field, you can define error messages for each attribute and rule pair. This feature is very useful to display more realistic messages to the end user.
|
| For example:
|
| 'email.email': 'The email address you entered is not valid.'
| 'x.regex': 'You must enter data in "a-b.c" format for the x field.'
|
*/

    'custom' => [
        'x' => [
            'regex' => 'You must enter data in the "a-b.c" format for the x field.',
        ],
    ],

    /*
|--------------------------------------------------------------------------
| Custom Attribute Names
|--------------------------------------------------------------------------
|
| The information in this field is used to translate attribute names like "email" into more readable text like "email address". This information helps make error messages cleaner.
|
| For example:
|
| 'email' => 'email address',
| 'password' => 'password',
|
*/

    'attributes' => [
        'title' => __('words.title'),
        'category_id' => __('words.category'),
        'brand_id' => __('words.brand'),
        'description' => __('words.description'),
        'price' => __('words.price'),
        'discount' => __('words.discount_price'),
        'images' => __('words.images'),
        'informations' => __('words.information'),
        'informations.*.information_title' => __('words.information_title'),
        'informations.*.information_description' => __('words.information_description'),
        'list' => __('words.variation'),
        'list.*.variant' => __('words.variation_name'),
        'list.*.attribute.*.attribute_title' => __('words.attribute_name'),
        'list.*.attribute.*.attribute_stock' => __('words.attribute_stock'),
        'list.*.attribute.*.attribute_price' => __('words.attribute_price'),
        'list.*.attribute' => __('words.attribute_list'),
        'quantity' => __('words.quantity'),
        'quantity.*' => __('words.quantity'),
        'rating' => __('words.rating'),
        'content' => __('words.content'),
        'product' => __('words.product'),
        'email' => __('words.email_adress'),
        'password' => __('words.password'),
        'repeat' => __('words.repeat_password'),
        'name' => __('words.name'),
        'surname' => __('words.surname'),
        'adress' => __('words.adress'),
        'phone' => __('words.phone_number'),
        'search' => __('words.search'),
        'code'=>__('words.code'),
        'showcases.*.category_id'=>__('words.showcase_category'),
        'showcases.*.image'=>__('words.showcase_image'),
        'showcases'=>__('words.showcase'),
    ],
];
