<div class="msg-info" style="border: 3px black solid; border-radius: 15%">
    <div class="msg-icon">
        @if($type == 'primary')
            ✅
        @elseif($type == 'warning')
            ⚠️
        @else
            ❗️
        @endif
    </div>
    <div class="msg-message {{$type}}">
        {{$message}}
    </div>
</div>
