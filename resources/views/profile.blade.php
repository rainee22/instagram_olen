<x-app-layout>
    <section>
        <div class="inline-flex items-center justify-between py-2 px-3">

            <div
                class="h-36 w-36 rounded-full flex-none bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-[2px]">
                <img class="h-full w-full rounded-full bg-white p-[2px]"
                    src="{{ Vite::asset('resources/images/koreanolen.jpg') }}">

            </div>
            <div class=" grid grid-cols-1 gap-4 content-center py-2 px-3">
                <div class="flex items-center justify-between ml-10 pr-0">
                    <p class="text-lg font-normal">Loraine22</p>
                    <button type="submit" class="bg-gray-200 hover:bg-gray-300 font-semibold text-sm rounded-md p-2 px-3 text-black">
                        Edit&nbsp;Profile
                    </button>
                    <button type="submit" class="bg-gray-200 hover:bg-gray-300 font-semibold text-sm rounded-md p-2 px-3 text-black">
                        Ad&nbsp;Tools
                    </button>
                    <button type="button">
                        <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center justify-between ml-10">
                    <p class=""><strong>387</strong> posts &nbsp;&nbsp;&nbsp;</p>
                    <p class=""><strong>1M</strong> followers&nbsp;&nbsp;&nbsp;</p>
                    <p class=""><strong>103</strong> following&nbsp;&nbsp;&nbsp;</p>
                </div>

                <div class="flex items-center justify-between ml-10 leading-5">
                    <p class="">Loraine Mae Rito</p>
                </div>
                <div class="flex items-center justify-between ml-10 leading-3">
                    <p class="text-gray-400">Public figure</p>
                </div>
                <div class="flex items-center justify-between ml-10 leading-3">
                    <p class="">Open for Projects, Collaboration, Promotions, and Paid</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
