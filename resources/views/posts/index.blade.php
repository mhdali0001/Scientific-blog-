
<style>
.btn-custom {
    background-color:rgb(255, 170, 80); /* Coral Orange */
    border: none;
    color: white;
    font-size: 0.9rem;
    padding: 8px 16px;
    border-radius: 5px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow */
}

.btn-custom:hover {
    background: linear-gradient(90deg,rgb(255, rgb(255, 191, 0),rgb(255, 234, 0)); /* Dark orange gradient */
    color: white;
    transform: translateY(-2px); /* Subtle lift effect */
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15); /* Enhanced shadow on hover */
}

</style>
<x-layout>
<h1 class="mb-4 text-left" style="font-size: 2.5rem; font-weight: bold;">Latest Posts</h1>
 
        @foreach($posts as $post)
            <x-card href="posts/{{$post->id }} ">
                <h2 class="post-title" style="font-size: 1.5rem; font-weight: bold; color: #333;">{{ $post->title }}</h2>
                <p class="post-excerpt" style="color: #666; font-size: 1rem;">{{ Str::limit($post->description, 150, '...') }}</p>
                <p class="text-muted mt-2">Published on {{ $post->created_at->format('M d, Y') }}</p>
                <a href="{{ route('posts.show', $post->id) }}"  class="btn btn-custom btn-sm "> Read More</a>                

            </x-card>
        @endforeach    
     {{ $posts->links()}}

  

 
</x-layout>
