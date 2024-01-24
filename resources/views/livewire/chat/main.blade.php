<div>
    <div class="chat_container">
        <div class="chat_list_container">
            @livewire('chat.chat-list')
        </div>
        <div class="chat_box_container">
            @livewire('chat.chatbox')
            <div class="chat_box_footer">
                @livewire('chat.send-message')
            </div>
        </div>
        
    </div>
    <script>
        window.addEventListener('chatSelected', event=>{
            if(window.innerWidth < 768){
                $('.chat_list_container').hide();
                $('.chat_box_container').show();
            }
        });

        $(window).resize(function(){
            if(window.innerWidth > 768){
                $('.chat_list_container').show();
                $('.chat_box_container').show();
            }
        });

        $(document).on('click', '.return', function(){
            $('.chat_list_container').show();
            $('.chat_box_container').hide();
        })
    </script>
</div>