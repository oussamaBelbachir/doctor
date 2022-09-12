@props(["a","id","label","type"=>"text","placeholder"=>"","required"=>false,"autofocus"=>false])


<div class="mb-4 relative">

    <label class="block mb-2 capitalize " for={{$id}}>{{$label}}</label>
    <select class="w-full" name="" id="">
        <option>Spécialités</option>
        @foreach($a as $id => $value)
        <option value={{$id}}>{{$value}}</option>
        @endforeach

    </select>


</div>
