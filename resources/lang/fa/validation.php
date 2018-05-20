<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute باید پذیرفته شده باشد.',
    'active_url'           => ':attribute یک آدرس معتبر نیست.',
    'after'                => ':attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal'       => ':attribute باید تاریخی بعد یا برابر با :date باشد.',
    'alpha'                => ':attribute باید تنها شامل حروف الفبا باشد.',
    'alpha_dash'           => ':attribute باید تنها شامل حروف الفبا، اعداد و خط تیره(-) باشد.',
    'alpha_num'            => ':attribute باید تنها شامل حروف الفبا و اعداد باشد.',
    'array'                => ':attribute باید یک آرایه باشد.',
    'before'               => ':attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal'      => ':attribute باید تاریخی قبل یا برابر با :date باشد.',
    'between'              => [
        'numeric' => ':attribute باید بین :min و :max باشد.',
        'file'    => ':attribute باید بین :min و :max کیلوبایت باشد.',
        'string'  => ':attribute باید بین :min و :max کاراکتر باشد.',
        'array'   => ':attribute باید بین :min و :max آیتم داشته باشد.',
    ],
    'boolean'              => ':attribute باید true یا false باشد.',
    'confirmed'            => 'تاییدیه :attribute مطابقت ندارد.',
    'date'                 => ':attribute یک تاریخ معتبر نیست.',
    'date_format'          => ':attribute با الگوی :format مطابقت ندارد.',
    'different'            => ':attribute و :other باید متفاوت باشند.',
    'digits'               => ':attribute باید :digits رقم باشد.',
    'digits_between'       => ':attribute باید بین :min و :max رقم باشد.',
    'dimensions'           => ':attribute دارای ابعاد تصویر نامعتبر است.',
    'distinct'             => ':attribute دارای مقدار تکراری است.',
    'email'                => ':attribute باید یک ایمیل صحیح باشد.',
    'exists'               => ':attribute انتخاب شده معتبر نیست.',
    'file'                 => ':attribute باید یک فایل باشد.',
    'filled'               => ':attribute باید دارای یک مقدار باشد.',
    'image'                => ':attribute باید یک تصویر باشد.',
    'in'                   => ':attribute انتخاب شده معتبر نیست.',
    'in_array'             => ':attribute در :other وجود ندارد.',
    'integer'              => ':attribute باید نوع داده ای عددی (integer) باشد.',
    'ip'                   => ':attribute باید IP آدرس معتبر باشد.',
    'ipv4'                 => ':attribute باید آدرس IPv4 معتبر باشد.',
    'ipv6'                 => ':attribute باید آدرس IPv6 معتبر باشد.',
    'json'                 => ':attribute باید رشته JSON معتبر باشد.',
    'max'                  => [
        'numeric' => ':attribute نباید بزرگتر از :max باشد.',
        'file'    => ':attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'string'  => ':attribute نباید بیشتر از :max کاراکتر باشد.',
        'array'   => ':attribute نباید بیشتر از :max آیتم داشته باشد.',
    ],
    'mimes'                => ':attribute باید یکی از فرمت های :values باشد.',
    'mimetypes'            => ':attribute باید یکی از فرمت های :values باشد.',
    'min'                  => [
        'numeric' => ':attribute نباید کوچکتر از :min باشد.',
        'file'    => ':attribute نباید کوچکتر از :min کیلوبایت باشد.',
        'string'  => ':attribute نباید کمتر از :min کاراکتر باشد.',
        'array'   => ':attribute باید حداقل :min آیتم داشته باشد.',
    ],
    'not_in'               => ':attribute انتخاب شده معتبر نیست.',
    'numeric'              => ':attribute باید یک عدد باشد.',
    'present'              => ':attribute باید حضور داشته باشد.',
    'regex'                => 'فرمت :attribute معتبر نیست.',
    'required'             => 'وارد کردن :attribute الزامی است.',
    'required_if'          => 'وارد کردن :attribute زمانی که :other برابر با :value است، الزامی می باشد.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'وارد کردن :attribute زمانی که :values وجود دارد، الزامی است.',
    'required_with_all'    => 'وارد کردن :attribute زمانی که :values وجود دارد، الزامی است.',
    'required_without'     => 'وارد کردن :attribute زمانی که :values وجود ندارد، الزامی است.',
    'required_without_all' => 'وارد کردن :attribute زمانی که هیچ یک از :values وجود نداشته باشد، الزامی است.',
    'same'                 => ':attribute و :other باید مانند هم باشند.',
    'size'                 => [
        'numeric' => ':attribute باید برابر با :size باشد.',
        'file'    => ':attribute باید برابر با :size کیلوبایت باشد.',
        'string'  => ':attribute باید برابر با :size کاراکتر باشد.',
        'array'   => ':attribute باید شامل :size آیتم باشد.',
    ],
    'string'               => ':attribute باید یک رشته باشد.',
    'timezone'             => ':attribute باید یک منطقه معتبر باشد.',
    'unique'               => ':attribute از قبل وجود دارد.',
    'uploaded'             => ':attribute آپلود نشد.',
    'url'                  => 'فرمت :attribute معتبر نیست.',

    'persian_date'                  => 'تاریخ نامعتبر است.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention 'attribute.rule' to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'type' => [
            'number' => 'نوع نامعتبر',
            'min' => 'نوع نامعتبر',
            'max' => 'نوع نامعتبر',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of 'email'. This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name' => 'نام',
        'first_name' => 'نام',
        'family' => 'نام خانوادگی',
        'last_name' => 'نام خانوادگی',
        'username' => 'نام کاربری',
        'email' => 'ایمیل',
        'password' => 'گذرواژه',
        'password_confirmation' => 'تاییدیه گذرواژه',
        'city' => 'شهر',
        'country' => 'کشور',
        'address' => 'آدرس',
        'phone' => 'تلفن',
        'mobile' => 'موبایل',
        'age' => 'سن',
        'sex' => 'جنسیت',
        'gender' => 'جنسیت',
        'day' => 'روز',
        'month' => 'ماه',
        'year' => 'سال',
        'hour' => 'ساعت',
        'minute' => 'دقیقه',
        'second' => 'ثانیه',
        'title' => 'عنوان',
        'description' => 'توضیحات',
        'date' => 'تاریخ',
        'time' => 'زمان',
        'size' => 'اندازه',
        'label' => 'عنوان',
        'lat' => 'عرض جغرافیایی',
        'lng' => 'طول جغرافیایی',
        'data_logger_serial' => 'شماره سریال دیتالاگر',
        'code' => 'کد',
        'install_date' => 'تاریخ ثبت',

        'battery-low_battery_value' => 'حداقل مقدار مجاز',
        'battery-high_battery_value' => 'حداکثر مقدار مجاز',

        'tank-tank_length' => 'طول مخزن',
        'tank-tank_width' => 'عرض مخزن',
        'tank-tank_height' => 'ارتفاع مفید مخزن',
        'tank-tank_empty_value' => 'حداقل سطح مجاز',
        'tank-tank_empty_time' => 'زمان تاخیر مجاز',
        'tank-tank_full_value' => 'حداکثر سطح مجاز',

        'pressure-low_pressure_value' => 'حداقل فشار مجاز',
        'pressure-low_pressure_time' => 'زمان تاخیر مجاز',
        'pressure-high_pressure_value' => 'حداکثر فشار مجاز',
        'pressure-high_pressure_time' => 'زمان تاخیر مجاز',

        'debi-low_flow_meter_value' => 'حداقل دبی مجاز',
        'debi-low_flow_meter_time' => 'زمان تاخیر مجاز',

        'chlorine-low_chlorine_value' => 'حداقل مقدار مجاز کلر',
        'chlorine-low_chlorine_time' => 'زمان تاخیر مجاز',
        'chlorine-high_chlorine_value' => 'حداکثر مقدار مجاز کلر',
        'chlorine-high_chlorine_time' => 'زمان تاخیر مجاز',

        'telemetry-alert_radio_disconnect_top_station_text' => 'متن آلارم',

        'digital-title_digital_input_1' => 'عنوان ورودی',
        'digital-title_digital_input_2' => 'عنوان ورودی',
        'digital-title_digital_input_3' => 'عنوان ورودی',
        'digital-title_digital_input_4' => 'عنوان ورودی',

        'analog-title_analog_input_1' => 'عنوان ورودی',
        'analog-title_analog_input_2' => 'عنوان ورودی',
        'analog-title_analog_input_3' => 'عنوان ورودی',
        'analog-title_analog_input_4' => 'عنوان ورودی',
        'analog-low_value_analog_input_1' => 'حداقل مقدار مجاز',
        'analog-low_value_analog_input_2' => 'حداقل مقدار مجاز',
        'analog-low_value_analog_input_3' => 'حداقل مقدار مجاز',
        'analog-low_value_analog_input_4' => 'حداقل مقدار مجاز',
        'analog-low_time_analog_input_1' => 'زمان تاخیر مجاز',
        'analog-low_time_analog_input_2' => 'زمان تاخیر مجاز',
        'analog-low_time_analog_input_3' => 'زمان تاخیر مجاز',
        'analog-low_time_analog_input_4' => 'زمان تاخیر مجاز',
        'analog-high_value_analog_input_1' => 'حداکثر مقدار مجاز',
        'analog-high_value_analog_input_2' => 'حداکثر مقدار مجاز',
        'analog-high_value_analog_input_3' => 'حداکثر مقدار مجاز',
        'analog-high_value_analog_input_4' => 'حداکثر مقدار مجاز',
        'analog-high_time_analog_input_1' => 'زمان تاخیر مجاز',
        'analog-high_time_analog_input_2' => 'زمان تاخیر مجاز',
        'analog-high_time_analog_input_3' => 'زمان تاخیر مجاز',
        'analog-high_time_analog_input_4' => 'زمان تاخیر مجاز',

        'relay-title_output_relay_1' => 'عنوان خروجی',
        'relay-title_output_relay_2' => 'عنوان خروجی',
        'relay-title_output_relay_3' => 'عنوان خروجی',
        'relay-title_output_relay_4' => 'عنوان خروجی',

        'soft-main_ep_disconnect_serial_soft_drive_text' => 'متن آلارم',
        'power-main_ep_disconnect_power_meter_text' => 'متن آلارم',
        'power-main_ep_low_voltage_value' => 'حداقل ولتاژ فازی مجاز',
        'power-main_ep_low_voltage_text' => 'متن آلارم',
        'power-main_ep_high_voltage_value' => 'حداکثر ولتاژ فازی مجاز',
        'power-main_ep_high_voltage_text' => 'متن آلارم',
        'power-main_ep_low_current_value' => 'حداقل جریان مجاز',
        'power-main_ep_low_current_text' => 'متن آلارم',
        'power-main_ep_high_current_value' => 'حداکثر جریان مجاز',
        'power-main_ep_high_current_text' => 'متن آلارم',
        'temperature-main_ep_high_temperature_panel_value' => 'حداکثر دمای مجاز',
        'temperature-main_ep_high_temperature_pump_value' => 'حداکثر دمای مجاز',

        'soft-reserve_ep_disconnect_serial_soft_drive_text' => 'متن آلارم',
        'power-reserve_ep_disconnect_power_meter_text' => 'متن آلارم',
        'power-reserve_ep_low_voltage_value' => 'حداقل ولتاژ فازی مجاز',
        'power-reserve_ep_low_voltage_text' => 'متن آلارم',
        'power-reserve_ep_high_voltage_value' => 'حداکثر ولتاژ فازی مجاز',
        'power-reserve_ep_high_voltage_text' => 'متن آلارم',
        'power-reserve_ep_low_current_value' => 'حداقل جریان مجاز',
        'power-reserve_ep_low_current_text' => 'متن آلارم',
        'power-reserve_ep_high_current_value' => 'حداکثر جریان مجاز',
        'power-reserve_ep_high_current_text' => 'متن آلارم',
        'temperature-reserve_ep_high_temperature_panel_value' => 'حداکثر دمای مجاز',
        'temperature-reserve_ep_high_temperature_pump_value' => 'حداکثر دمای مجاز',
    ],

];
