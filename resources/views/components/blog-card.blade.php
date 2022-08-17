
@foreach($blogs as $blog)
    <a href="   @if (\Illuminate\Support\Facades\Auth::user())
                {{route('blogs.get', $blog->id)}}
            @endif">
        <div class="bg-gray-100 p-4 border-gray-400 border-2
                    w-52 h-52
                    rounded-xl
                    mx-8 my-4">
            <h2 class="text-2xl"> {{ $blog->title }} </h2>

            <p> {{ substr($blog->body,0,50)  }}... </p>
        </div>
    </a>
@endforeach
