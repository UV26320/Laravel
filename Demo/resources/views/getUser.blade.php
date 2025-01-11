
<!-- this is blade templating (it is faster than normal php code) -->
<!-- <h1>User Name is : {{$names}}</h1> -->

<!-- this is normal php code -->
<h1>User Name is : <?php echo $names?></h1>


<!-- random function in php  -->
 <!-- <h1>{{rand()}}</h1> -->



<!-- how to we can pass array -->
<!-- <h1>{{$xyz[0]}}</h1>
<h1>{{$xyz[1]}}</h1>
<h1>{{$xyz[2]}}</h1> -->


<!-- if else  -->

<!-- @if ($names=="uda") <h2>hey champ</h2>
@elseif ($names=="hia") <h2>hey cutPy</h2>
@else <h2>tata</h2>
@endif -->


<!-- now for loops -->
<!-- 
<div>
    @foreach ($xyz as $user)
    <h4>{{$user}}</h4>
    @endforeach
</div>

<div>
    @for($i=0; $i < 5 ; $i++)
        <h4>{{$i}}</h4>
        @endfor
</div> -->



