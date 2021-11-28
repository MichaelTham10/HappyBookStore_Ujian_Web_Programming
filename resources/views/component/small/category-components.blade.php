<div class="col-4">
    <div class="bg-warning">
        <h3 class="p-3">Category</h3>
    </div>
    @foreach ($categories as $category)
            <a class="ml-2" style="font-size: 16px" href="/category/{{$category->id}}">{{$category->category}}</a>
            <br>
            <br>
    @endforeach
</div>