
 
<tr class="intro-x">
    <td class="w-40">
        <div class="oussama flex items-center">
            <div class="wrapimg mr-3">
                <img alt="Icewall Tailwind HTML Admin Template" class="" src="https://www.commeuncamion.com/content/uploads/2014/05/forme-visage-coiffure-carr.jpg" title="Uploaded at 14 May 2021">
            </div>
            <div class="text-md capitalize font-medium whitespace-nowrap">{{$doctor["first_name"]}} {{$doctor["last_name"]}}</div>
        </div>
    </td>
    <td>
    <div class=" w-fit lowercase ">{{$doctor["email"]}}</div>
    </td>
    <td>
        <div class=" w-fit lowercase ">{{$doctor["phone"]}}</div>
    </td>
    <td class="text-center">
        <div class="">
            @foreach($doctor["specialities"] as $key=>$item)
                <div class=" w-fit px-4 py-1 mx-auto rounded-md bg-sky-100 capitalize font-medium {{count($doctor["specialities"])-1 == $key ? '' : 'mb-2'}}">{{$item->name}}</div>
            @endforeach            
        </div>

    </td>
    <td class="w-40">
        @if($doctor["active"])
        <div class="flex items-center justify-center text-success"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
        @else
        <div class="flex items-center justify-center text-danger"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
        @endif

    </td>
    <td class="table-report__action w-56">
        <div class="flex justify-center items-center">
            <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Modifier </a>
            <a class="flex items-center text-danger" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Supprimer </a>
        </div>
    </td>
</tr>


