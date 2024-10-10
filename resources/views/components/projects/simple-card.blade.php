@props(['project'])

<x-ui.card class="col-span-2">
    <div class="flex items-start justify-between pb-4">
        <div class="flex flex-col gap-[16px]">
            <div>
                <x-projects.status :status="$project->status" />
            </div>

            <h1 class="text-[28px] text-white leading-9 line-clamp-1">
                {{ $project->title }}
            </h1>
            <div class="text-[#8C8C9A] text-[14px] leading-6">
                Publicado {{ $project->created_at->diffForHumans() }}
            </div>



            <div class="flex-auto justify-between mt-4 text-[14px]">
                <div class="text-[#8C8C9A]  leading-6">Encerra em:</div>
                <div class="font-bold flex items-center space-x-1">
                    <span class="text-white ">01</span><span>:</span>
                    <span class="text-white ">12</span><span>:</span>
                    <span class="text-white ">26</span><span>:</span>
                    <span class="text-white ">64</span>
                </div>
            </div>
        </div>


    </div>

    <div class="py-4 space-y-4 flex-grow">
        <div class="uppercase font-bold text-[#8C8C9A] text-[12px]">Tecnologias</div>
        <div class="flex gap-[8px] items-center pb-2 flex-wrap">
            @foreach($project->tech_stack as $tech)
            <x-ui.tech :icon="$tech" :text="$tech" class="w-full sm:w-auto" />
            @endforeach
        </div>
    </div>

    <div class="pt-4 space-y-4">
        <div class="uppercase font-bold text-[#8C8C9A] text-[12px]">Publicado Por</div>
        <div class="flex gap-[8px] items-center">
            <div>
                <x-ui.avatar src="{{ $project->author->avatar }}" />
            </div>

            <div>
                <div class="text-white text-[14px] font-bold tracking-wide">
                    {{ $project->author->name }}
                </div>
                <div class="flex items-center space-x-[4px]">
                    @foreach(range(1, $project->author->stars) as $star)
                    <x-ui.icons.star class="h-[14px]" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-ui.card>
