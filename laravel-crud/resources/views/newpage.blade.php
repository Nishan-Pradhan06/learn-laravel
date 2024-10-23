<div>
    <h1>Users are: </h1>
    <h2>{{$user}}</h2>

    <!-- else if condition -->
    @if($user == 'nishan')
    <h2>this is me</h2>
    @elseif($user == 'isha')
    <h2>love of life.💘</h2>
    @else
    <h2>bhaadme jayee</h2>
    @endif

    <!-- for loop -->
    @for($i=1;$i<=10;$i++)
        <h2>{{$i}}</h2>
        @endfor
        <!-- for each -->
        @foreach($users as $user)
        <h3>{{$user}}</h3>
        @endforeach
</div>