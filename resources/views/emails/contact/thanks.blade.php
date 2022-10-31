@component('mail::message')
# Introduction

お問い合わせありがとうございます。

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
