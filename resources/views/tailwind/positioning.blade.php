<x-app>
    <button class="rounded-lg px-1 h-10 w-18 py-1 border-s-blue-700 border bg-green-400 font-semibold shadow-md text-white hover:bg-green-700 cursor-pointer active:opacity-5">
        Hello
    </button>

    <div class="m-5">
        <div class="border-3 p-4 size-48 box-border">
            <p>border, padding included in width and height</p>
        </div>
        <div class="border-3 p-4 size-48 box-content">
            <p>border, padding is not included in width and height</p>
        </div>
    </div>

    <div class="mb-9">
        <p>Lorem ipsum dolor sit amet consectetur <span class="inline bg-gray-400 h-10">display:inline</span> adipisicing elit. Sunt, deserunt!</p>
        <p>Lorem ipsum dolor sit amet consectetur <span class="inline-block bg-gray-400 h-10">display:inline</span> adipisicing elit. Sunt, deserunt!</p>
        <p>Lorem ipsum dolor sit amet consectetur <span class="block bg-gray-400 h-10">display:inline</span> adipisicing elit. Sunt, deserunt!</p>
    </div>

    <div class="mb-19">
        <div class="bg-green-600 size-20 float-left">image</div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum architecto tenetur doloribus quaerat sunt, repellendus consequuntur. Minima nobis et ratione dolorem commodi similique iste odit rerum incidunt deleniti quibusdam quo, numquam explicabo. Ea consequatur beatae asperiores, natus est quisquam maxime.
    </div>
    <div class="mb-19">
        <div class="bg-green-600 size-20 float-right">image</div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum architecto tenetur doloribus quaerat sunt, repellendus consequuntur. Minima nobis et ratione dolorem commodi similique iste odit rerum incidunt deleniti quibusdam quo, numquam explicabo. Ea consequatur beatae asperiores, natus est quisquam maxime.
    </div>

    <div class="h-10 overflow-auto mb-10">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum aliquid, voluptatem velit, eum alias nisi vel error consequatur reprehenderit aut unde nulla maxime ea quasi. Laudantium voluptatem consequatur animi fuga quibusdam omnis, officia magnam explicabo dicta architecto debitis facilis fugiat maxime cumque, harum rem possimus, itaque sit laboriosam corrupti praesentium deserunt. Nesciunt at enim corrupti adipisci esse delectus totam soluta, non, dolores quos quibusdam doloremque fugit hic. Voluptatibus animi maxime labore, temporibus aspernatur distinctio molestias architecto cupiditate officiis voluptas nihil et ad voluptate, earum illo perferendis aut facere repellendus eos incidunt non dolorum. Eius corporis repellendus sed eveniet, maiores distinctio.
    </div>
    
    <div class="bg-gray-500 relative size-48">
        <div class="absolute top-0 right-0">item</div>
        <div class="absolute bottom-0 left-0">item</div>
    </div>
    
</x-app>
