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
        <div class="chatlist_item">
            <div class="chatlist_img_container">
                <img src="https://picsum.photos/id/{{conversation}}/200/300" alt="">
            </div>
            <div class="chatlist_info">
                <div class="top_row">
                    <div class="list_username">John</div>
                    <span class="date"> 2d </span>
                </div>
                <div class="bottom_row">
                    <div class="message_body">
                        Lorem ipsum dolor sit amet, consecteur
                    </div>
                    <div class="unread_count">
                        56
                    </div>
                
                </div>
            </div>
        </div>
        @else
        You have no conversations
        @endif
    </div>
</div>
