<div>
    @if($selectedConversation)
        <div class="chatbox_header">
            <div class="return">
                <i class="bi bi-arrow-left"></i> 
            </div>
            <div class="img_container">
                <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{$receiverInstance->name}}" alt="">
            </div>
            <div class="name">{{$receiverInstance->name}}</div>
            <div class="info">
                <div class="info_item">
                    <i class="bi bi-telephone-fill"></i> 
                </div>
                <div class="info_item">
                    <i class="bi bi-image"></i> 
                </div>
                <div class="info_item">
                    <i class="bi bi-info-circle-fill"></i> 
                </div>
            </div>
        </div>

        <div class="chatbox_body">
            @foreach ($messages as $message)
                <div class="msg_body msg_body_me">
                    {{$message->body}}
                    <div class="msg_body_footer">
                        <div class="date">
                            {{$message->created_at->format('m: i a')}}
                        </div>
                        <div class="read">
                            <i class="bi bi-check"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="chatbox_footer">
            <!-- Footer content here -->
        </div>
    @else
        <div class="fs-4 text-center text-primary mt-5">
            No conversation selected
        </div>
    @endif
</div>
