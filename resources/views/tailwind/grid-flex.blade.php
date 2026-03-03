<x-app>
    <div class="grid grid-cols-3 sm:grid-cols-4 gap-4">
        <div class="bg-pink-500 ">01</div>
        <div class="bg-pink-500 ">02</div>
        <div class="bg-pink-500 row-span-2">03
            <div class="flex flex-row">
                <div class="bg-cyan-400 m-2">01</div>
                <div class="bg-cyan-400 m-2">02</div>
                <div class="bg-cyan-400 m-2">03</div>
            </div>
        </div>
        <div class="bg-pink-500 ">04</div>
        <div class="bg-pink-500 ">05</div>
        <div class="bg-pink-500 row-span-2">06</div>
        <div class="bg-pink-500 ">07</div>
        <div class="bg-pink-500 ">08</div>
        <div class="bg-pink-500 ">09</div>
        <div class="bg-pink-500 col-span-2">10</div>
    </div>
    <div class="grid grid-rows-3 grid-flow-col gap-4 mb-10">
        <div class="bg-amber-400">01</div>
        <div class="bg-amber-400">02</div>
        <div class="bg-amber-400">03</div>
        <div class="bg-amber-400 row-span-3">04
            <div class="flex flex-row">
                <div class="bg-cyan-400 m-2 basis-1/4">01</div>
                <div class="bg-cyan-400 m-2 basis-1/2">02</div>
                <div class="bg-cyan-400 m-2 basis-1/4">03</div>
            </div>  
            <div class="flex flex-row space-x-2">
                <div class="bg-cyan-400 flex-1">01</div>
                <div class="bg-cyan-400 ">02</div>
                <div class="bg-cyan-400 ">03</div>
            </div>
        </div>
        <div class="bg-amber-400">05</div>
        <div class="bg-amber-400">06</div>
        <div class="bg-amber-400">07</div>
        <div class="bg-amber-400">08</div>
        <div class="bg-amber-400">09</div>
        <div class="bg-amber-400">10</div>
    </div>

    <div class="bg-amber-400 h-48 flex justify-around">
        <div class="bg-cyan-400 m-2 w-1/3 h-1/6 flex justify-center items-center">1/6 height</div>
        <div class="bg-cyan-400 m-2 w-1/3 flex justify-center items-center">normal height</div>
        <div class="bg-cyan-400 w-1/3 h-full flex justify-center items-center">full height</div>
    </div>
</x-app>
