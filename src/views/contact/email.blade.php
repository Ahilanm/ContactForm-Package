@component('mail::message')
# Introduction

There is new query from {{$name}}<br/> 
Name: {{$name}},<br/>
Email: {{$email}},<br/>
Phone: {{$phone}},<br/>
Message: {{$message}}<br/>

Thanks,<br>
{{$name}}
@endcomponent
