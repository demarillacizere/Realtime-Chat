<div>
    <div class="chatlist_header">
    <div class="title">
        Chat
    </div>
    <div class="img_container">
        <img src="https://picsum.photos/200/300" alt="">
    </div>
    </div>
    <div class="chatlist_body">
        @if (count($conversations)>0)
        @foreach ($conversations as $conversation)
        <div class="chatlist_item" wire:click="chatUserSelected({{ $conversation }}, {{ $this->getChatUserInstance($conversation, $name='id') }})">
            <div class="chatlist_img_container">
                <img src="https://picsum.photos/id/{{$this->getChatUserInstance($conversation, $name='id')}}/200/300" alt="">
            </div>
            <div class="chatlist_info">
                <div class="top_row">
                    <div class="list_username">{{ $this->getChatUserInstance($conversation, $name='name')}}</div>
                    <span class="date"> {{$conversation->messages->last()?->created_at->shortAbsoluteDiffForHumans()}} </span>
                </div>
                <div class="bottom_row">
                    <div class="message_body">
                        {{$conversation->messages->last()->body}}
                    </div>
                    <div class="unread_count">
                        56
                    </div>
                
                </div>
            </div>
        </div>
        @endforeach
        @else
        You have no conversations
        @endif
    </div>
</div>
