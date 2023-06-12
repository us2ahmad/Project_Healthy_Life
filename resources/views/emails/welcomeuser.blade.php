<x-mail::message>
<h1>Welcome  To <span style="color:red"> {{$user}} </span> In Your Web site</h1>
<p style="color:blue">You Become {{$type}} </p>
<p style="color:blue">You can  Start With us </p>
<h2 style="color:brown">The End </h2>
<x-mail::button :url="''">
Welcome
</x-mail::button>


<h3 style="color:red">
    Thanks,{{$user}}
</h3>

<br>
<h2 style="color:red">Exit  {{$user}}</h2>
</x-mail::message>
