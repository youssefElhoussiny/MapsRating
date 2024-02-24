<form action="" method="post">
    @csrf
    <div class="flex flex-row p-5">
        <div class="w-6/12">
            <input type="text" id="address" name="address" class="p-1 w-full bg-gray-200 rounded-md " placeholder="العنوان">
            <div id="address-list"></div>
        </div>
        <div class="w-6/12">
            <select name="category" id="" class="p-1 w-full bg-gray-200 rounded-md mr-5 ">
                <option value="">حدد التصنيف</option>

            </select>
        </div>
        <div class="mr-5">
            <button type="submit" class="py-2 px-2 bg-gray-500 hover:bg-gray-400 text-white mr-5 rounded-md">بحث</button>

        </div>
    </div>
</form>
<section class="m-auto text-center">
    <div class="category mt-5">
        <ul>
            @foreach ($categories as $category)
                <li>
                    <a href="{{route('category.show' , $category->slug)}}" class="bg-blue-900 hover:bg-gray-400">{{$category->title}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
