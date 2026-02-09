<x-layout>
    <div class="pt-8 mt-12 space-y-4 md:p-4">

        {{-- Welcome --}}
        <div class="flex flex-col md:flex-row md:space-x-[52px] md:items-center space-y-3 bg-[rgba(220,241,254,36%)] rounded-[10px] p-3 md:p-7">
            <img src="/assets/images/profile-img.png" class="w-[76px] h-[76px]"  alt="profile-img"/>
            <div>
                <h1 class="font-semibold text-xl md:text-4xl text-[#171725]">
                    Hi John, welcome to Bonga
                </h1>
                <p class="text-sm text-[#344054]">
                    We’re excited to welcome you to Bonga sms and we’re even more excited about what we’ve got planned. You’re already on your way to creating beautiful experiences for your client but before then here are a few things to set up.
                </p>
            </div>
        </div>

        {{-- Overview --}}
        <div class="grid grid-cols-1 gap-4 xl:grid-cols-3">
            @foreach($overviewValues as $item)
                <div class="flex flex-col md:flex-row justify-start rounded-[10px] bg-[rgba(220,241,254,100%)] px-3 md:px-6 py-5 gap-x-5">

                    <img src="{{ $item['img'] }}"
                         class="w-[76px] h-[76px]"
                         alt="logo showcasing {{ $item['title'] }}" />

                    <div class="space-y-2">
                        <h2 class="font-bold text-xl text-[#171725] pt-5 md:pt-0">
                            {{ $item['title'] }}
                        </h2>

                        <p class="font-normal text-xs text-[#344054]">
                            {{ $item['description'] }}
                        </p>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</x-layout>
