@foreach($children as $subcategory)
        @if(count($subcategory->children))
            <li style="color: #1D00AF;font-family:'Arial Black">{{$subcategory->title}}</li>
                @include('home.categorytree', ['children' => $subcategory->children])
            <hr>
        @else
            <li class="nav-item"><a href="{{route('categoryservices',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
        @endif
@endforeach