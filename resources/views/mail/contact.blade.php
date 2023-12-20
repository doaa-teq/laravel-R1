<x-mail::message>
# Hello you have got an enquiry!

<h3>Name :{{$data['name']}}</h3>
<h3>Email :{{$data['email']}}</h3>
<h3>Massege :{{$data['massege']}}</h3>


<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
