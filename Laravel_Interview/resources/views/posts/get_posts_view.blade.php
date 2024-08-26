<!DOCTYPE html>
<head></head>
<body>


<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @unless(count($posts)==0)
@foreach($posts as $posts)
   <div>:posts="$posts"</div>
@endforeach

@else
<p>No Postings</p>
@endunless

</div>

</body>
