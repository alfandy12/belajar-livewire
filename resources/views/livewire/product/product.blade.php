<div>
  <br>
  <br>
 @foreach ($products as $p)
     <ul>
       <li>{{$p->name}}</li>
     </ul>
 @endforeach

 {{$products->links()}}
</div>
