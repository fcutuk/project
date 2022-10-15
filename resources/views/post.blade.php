 <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Notice') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div style="width:1000px">
                <div class="border-2 border-gray-600 rounded-xl">
                    <div class="text-center">
                        <h3 class="mt-2 font-semibold">Posaljite novu prijavu</h3>
                    </div>

                    <form action="store" method="post" class="items-center space-y-4 px-4 py-6">
                        @csrf
                        <div>
                            <input type="text">
                        </div>
                        <div>
                            <input type="text">
                        </div>

                        <div class="text-center">
                            <select>
                                <lable></lable>
                                <lable></lable>
                            </select>
                        </div>

                        <div>
                            <input type="checkbox">
                        </div>
                        <div class="text-center">
                            <button></button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
