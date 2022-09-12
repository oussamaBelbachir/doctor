@props(["icon","name","number"])

<div class="  block col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
    <div class="report-box zoom-in">
        <div class="box p-5 flex items-center justify-around">
                <div class="my-10">
                    <i data-feather={{$icon}} class="report-box__icon text-primary w-10 h-10"></i>
                </div>
            <div class=" text-center">
                <div class=" text-base text-slate-600 mb-2 font-normal">{{$name}}</div>
                <div class="text-3xl font-medium leading-8  ">{{$number}}</div>
            </div>
        </div>
    </div>
</div>
