@props(["disabled"=>false,"value"=>"","id","label","type"=>"text","placeholder"=>"","required"=>false,"autofocus"=>false])

<div class="mb-4 relative group-main-input">

    <label class="block mb-2 capitalize font-medium text-sm" for={{$id}}>{{$label}}</label>
    <input
        {{$value ? "value=".$value : ""}}
        {{$required ? "required" : ""}}
        {{$disabled ? "disabled" : ""}}
        {{$autofocus ? "autofocus" : ""}}
        id={{$id}}
        type={{$type}}
        name={{$id}}
        class="main-input text-gray-700"
        placeholder={{$placeholder}}

    >
    <span></span>
</div>
