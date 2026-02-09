<x-layout>
    <div class="pt-8 mt-12 space-y-4 md:p-4">

        {{-- Header --}}
        <div class="flex items-center justify-between">
            <h1 class="font-semibold text-4xl text-[#171725] leading-10">Manage Survey Questions</h1>

            <a href="{{ url('/dashboard/survey/questions/createsurveyquestion') }}"
               class="px-4 py-2 text-white bg-primary rounded-lg">
                Create Survey Question
            </a>
        </div>

        <div class="py-4 bg-white rounded-lg">

            {{-- Filters --}}
            <div class="px-6">
                <form method="GET">

                    <div class='grid grid-cols-1 gap-6 md:grid-cols-2'>
                        <div class='space-y-[6px]'>
                            <label class='text-sm text'>Survey</label>
                            <select
                                class="w-full h-10 border border-gray-500 bg-background px-3 py-2 text-sm rounded-[8px] ring-offset-background placeholder-text-muted-foreground focus:outline-none focus:ring-1 focus:ring-ring disabled:cursor-not-allowed disabled:opacity-50"
                            >
                                <option value="">Select survey ...</option>
                                <option value="1">Survey 1</option>
                                <option value="2">Survey 2</option>
                                <option value="3">Survey 3</option>
                            </select>
                        </div>

                        <div class='space-y-[6px]'>
                            <label class='text-sm text '>Survey Question</label>
                            <select
                                class="w-full h-10 border border-input bg-background px-3 py-2 text-sm rounded-[8px] ring-offset-background placeholder-text-muted-foreground focus:outline-none focus:ring-1 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            >
                                <option value="">Select survey question ...</option>
                                <option value="1">Survey 1</option>
                                <option value="2">Survey 2</option>
                                <option value="3">Survey 3</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>

            {{-- Search --}}
            <div class="p-6">
                <div class="flex mb-6 space-x-4">

                    <div class="relative flex-grow">
                        <input type="text"
                               name="search"
                               placeholder="Search"
                               class="w-full px-10 py-3 border border-gray-300 rounded-[8px] shadow-sm">

                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        🔍
                    </span>
                    </div>

                    <button class="px-4 py-2 border rounded-lg">Filters</button>
                    <button class="px-4 py-2 border rounded-lg">Customize</button>
                    <button class="px-4 py-2 border rounded-lg">Export</button>

                </div>
            </div>

            {{-- Table --}}
            <div class="px-6 pb-6">
                Table goes in here.....
            </div>

        </div>

    </div>

</x-layout>
