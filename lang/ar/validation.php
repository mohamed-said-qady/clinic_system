return [

/*
|--------------------------------------------------------------------------
| خطوط لغة التحقق
|--------------------------------------------------------------------------
|
| تحتوي خطوط اللغة التالية على رسائل الخطأ الافتراضية المستخدمة من قبل
| فئة المُحقِّق. بعض هذه القواعد لها نسخ متعددة مثل قواعد الحجم.
| لا تتردد في تعديل أي من هذه الرسائل هنا.
|
*/

'accepted' => 'يجب قبول :attribute.',
'accepted_if' => 'يجب قبول :attribute عندما يكون :other هو :value.',
'active_url' => 'إن :attribute ليس عنوان URL صالح.',
'after' => 'يجب أن يكون :attribute تاريخًا بعد :date.',
'after_or_equal' => 'يجب أن يكون :attribute تاريخًا بعد أو يساوي :date.',
'alpha' => 'يجب أن يحتوي :attribute على حروف فقط.',
'alpha_dash' => 'يجب أن يحتوي :attribute على حروف وأرقام وشرطات وشرطات سفلية فقط.',
'alpha_num' => 'يجب أن يحتوي :attribute على حروف وأرقام فقط.',
'array' => 'يجب أن يكون :attribute مصفوفة.',
'before' => 'يجب أن يكون :attribute تاريخًا قبل :date.',
'before_or_equal' => 'يجب أن يكون :attribute تاريخًا قبل أو يساوي :date.',
'between' => [
    'numeric' => 'يجب أن يكون :attribute بين :min و :max.',
    'file' => 'يجب أن يكون :attribute بين :min و :max كيلوبايت.',
    'string' => 'يجب أن يكون :attribute بين :min و :max حرفًا.',
    'array' => 'يجب أن يحتوي :attribute على بين :min و :max عنصرًا.',
],
'boolean' => 'يجب أن يكون حقل :attribute صحيحًا أو خطأ.',
'confirmed' => 'تأكيد :attribute لا يتطابق.',
'current_password' => 'كلمة المرور غير صحيحة.',
'date' => 'إن :attribute ليس تاريخًا صالحًا.',
'date_equals' => 'يجب أن يكون :attribute تاريخًا يساوي :date.',
'date_format' => 'إن :attribute لا يتطابق مع الشكل :format.',
'different' => 'يجب أن يكون :attribute و :other مختلفين.',
'digits' => 'يجب أن يكون :attribute :digits رقمًا.',
'digits_between' => 'يجب أن يكون :attribute بين :min و :max رقمًا.',
'dimensions' => 'إن :attribute يحتوي على أبعاد صورة غير صالحة.',
'distinct' => 'يحتوي حقل :attribute على قيمة مكررة.',
'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صالحًا.',
'ends_with' => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values.',
'exists' => 'إن :attribute المحدد غير صالح.',
'file' => 'يجب أن يكون :attribute ملفًا.',
'filled' => 'يجب أن يحتوي حقل :attribute على قيمة.',
'gt' => [
    'numeric' => 'يجب أن يكون :attribute أكبر من :value.',
    'file' => 'يجب أن يكون :attribute أكبر من :value كيلوبايت.',
    'string' => 'يجب أن يكون :attribute أكبر من :value حرفًا.',
    'array' => 'يجب أن يحتوي :attribute على أكثر من :value عنصرًا.',
],
'gte' => [
    'numeric' => 'يجب أن يكون :attribute أكبر من أو يساوي :value.',
    'file' => 'يجب أن يكون :attribute أكبر من أو يساوي :value كيلوبايت.',
    'string' => 'يجب أن يكون :attribute أكبر من أو يساوي :value حرفًا.',
    'array' => 'يجب أن يحتوي :attribute على :value عناصر أو أكثر.',
],
'image' => 'يجب أن يكون :attribute صورة.',
'in' => 'إن :attribute المحدد غير صالح.',
'in_array' => 'لا يوجد حقل :attribute في :other.',
'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
'ip' => 'يجب أن يكون :attribute عنوان IP صالح.',
'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صالح.',
'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صالح.',
'json' => 'يجب أن يكون :attribute سلسلة JSON صالحة.',
'lt' => [
    'numeric' => 'يجب أن يكون :attribute أقل من :value.',
    'file' => 'يجب أن يكون :attribute أقل من :value كيلوبايت.',
    'string' => 'يجب أن يكون :attribute أقل من :value حرفًا.',
    'array' => 'يجب أن يحتوي :attribute على أقل من :value عنصرًا.',
],
'lte' => [
    'numeric' => 'يجب أن يكون :attribute أقل من أو يساوي :value.',
    'file' => 'يجب أن يكون :attribute أقل من أو يساوي :value كيلوبايت.',
    'string' => 'يجب أن يكون :attribute أقل من أو يساوي :value حرفًا.',
    'array' => 'يجب ألا يحتوي :attribute على أكثر من :value عنصرًا.',
],
'max' => [
    'numeric' => 'يجب ألا يكون :attribute أكبر من :max.',
    'file' => 'يجب ألا يكون :attribute أكبر من :max كيلوبايت.',
    'string' => 'يجب ألا يكون :attribute أكبر من :max حرفًا.',
    'array' => 'يجب ألا يحتوي :attribute على أكثر من :max عنصرًا.',
],
'mimes' => 'يجب أن يكون :attribute ملفًا من النوع: :values.',
'mimetypes' => 'يجب أن يكون :attribute ملفًا من النوع: :values.',
'min' => [
    'numeric' => 'يجب أن يكون :attribute على الأقل :min.',
    'file' => 'يجب أن يكون :attribute على الأقل :min كيلوبايت.',
    'string' => 'يجب أن يكون :attribute على الأقل :min حرفًا.',
    'array' => 'يجب أن يحتوي :attribute على الأقل على :min عنصرًا.',
],
'multiple_of' => 'يجب أن يكون :attribute مضاعفًا لـ :value.',
'not_in' => 'إن :attribute المحدد غير صالح.',
'not_regex' => 'تنسيق :attribute غير صالح.',
'numeric' => 'يجب أن يكون :attribute رقمًا.',
'password' => 'كلمة المرور غير صحيحة.',
'present' => 'يجب أن يكون حقل :attribute موجودًا.',
'regex' => 'تنسيق :attribute غير صالح.',
'required' => 'يجب ملء حقل :attribute.',
'required_if' => 'يجب ملء حقل :attribute عندما يكون :other هو :value.',
'required_unless' => 'يجب ملء حقل :attribute ما لم يكن :other في :values.',
'required_with' => 'يجب ملء حقل :attribute عندما تكون :values موجودة.',
'required_with_all' => 'يجب ملء حقل :attribute عندما تكون :values موجودة.',
'required_without' => 'يجب ملء حقل :attribute عندما تكون :values غير موجودة.',
'required_without_all' => 'يجب ملء حقل :attribute عندما لا تكون أي من :values موجودة.',
'prohibited' => 'حقل :attribute محظور.',
'prohibited_if' => 'حقل :attribute محظور عندما يكون :other هو :value.',
'prohibited_unless' => 'حقل :attribute محظور ما لم يكن :other في :values.',
'same' => 'يجب أن يتطابق :attribute و :other.',
'size' => [
    'numeric' => 'يجب أن يكون :attribute هو :size.',
    'file' => 'يجب أن يكون :attribute هو :size كيلوبايت.',
    'string' => 'يجب أن يكون :attribute هو :size حرفًا.',
    'array' => 'يجب أن يحتوي :attribute على :size عنصرًا.',
],
'starts_with' => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values.',
'string' => 'يجب أن يكون :attribute سلسلة.',
'timezone' => 'يجب أن يكون :attribute منطقة زمنية صالحة.',
'unique' => 'تم أخذ :attribute بالفعل.',
'uploaded' => 'فشل تحميل :attribute.',
'url' => 'يجب أن يكون :attribute عنوان URL صالح.',
'uuid' => 'يجب أن يكون :attribute UUID صالح.',

/*
|--------------------------------------------------------------------------
| خطوط لغة التحقق المخصصة
|--------------------------------------------------------------------------
|
| هنا يمكنك تحديد رسائل تحقق مخصصة للسمات باستخدام
| الاصطلاح "attribute.rule" لتسمية الخطوط. هذا يجعل من السهل
| تحديد خط لغة مخصص محدد لقواعد السمات المعطاة.
|
*/

'custom' => [
    'attribute-name' => [
        'rule-name' => 'custom-message',
    ],
],

/*
|--------------------------------------------------------------------------
| سمات التحقق المخصصة
|--------------------------------------------------------------------------
|
| يتم استخدام خطوط اللغة التالية لاستبدال عنصر النائب
| بعبارة أكثر سهولة في القراءة مثل "عنوان البريد الإلكتروني" بدلاً من
| "email". يساعدنا هذا ببساطة في جعل رسالتنا أكثر تعبيرًا.
|
*/

'attributes' => [],

];