<x-app>
    <div class="text-red-700 bg-yellow-300 border-2 border-green-400">
        Colored text, Background and Border
    </div>
    <div class="bg-linear-to-r from-yellow-400 to-green-400 h-14"></div>
    <div class="bg-linear-to-r from-yellow-400  h-14"></div>
    <div class="bg-linear-to-l from-yellow-400  h-14"></div>
    <div class="h-14 bg-linear-to-r from-indigo-500 via-purple-500 to-pink-500"></div>
    <button class="border-2 border-red-400 cursor-pointer rounded bg-linear-to-r from-green-500 to-blue-500 hover:from-pink-500 hover:to-yellow-500">
        Hover with Gradient
    </button><br>
    <button class="bg-cyan-500 shadow-lg w-50 shadow-cyan-500/50">
        Shadow with saturation
    </button>
    <button class="bg-purple-500 hover:opacity-50 hover:rotate-[7deg] transition-all">
        opacity rotate
    </button>
    <button class="bg-blue-400 hover:skew-x-15 hover:opacity-50 transition-all">
        skeeeeeeeeeeew           
    </button>
    <button class="bg-blue-400 hover:skew-y-15 hover:opacity-50 transition-all">
        skeeeeeeeeew           
    </button>
    <div class="flex justify-center -space-x-8">
        <div class="bg-cyan-500">11111111111111111</div>
        <div class="bg-pink-500">22222222222222222</div>
    </div>
    <div class="flex justify-center -space-x-8">
        <div class="bg-cyan-500 mix-blend-multiply">11111111111111111</div>
        <div class="bg-pink-500 mix-blend-multiply">22222222222222222</div>
    </div>
    
    <table class="border-2 border-slate-300 border-separate">{{-- collapse --}}
        <thead>
            <tr>
                <th class="border-slate-300 border">State</th>
                <th class="border-slate-300 border">City</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border-slate-300 border">Indiana</td>
                <td class="border-slate-300 border">Indianapolis</td>
            </tr>
            <tr>
                <td class="border-slate-300 border">Ohio</td>
                <td class="border-slate-300 border">Columbus</td>
            </tr>
            <tr>
                <td class="border-slate-300 border">Mishigan</td>
                <td class="border-slate-300 border">Detroit</td>
            </tr>
        </tbody>
    </table>

    <div class="bg-cyan-400 size-20 blur-xs">
        cwscwmkc
    </div>

</x-app>