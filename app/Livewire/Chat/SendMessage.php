<?php

namespace App\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Livewire\Component;

class SendMessage extends Component
{
    public $selectedConversation;
    public $receiverInstance;
    public $body;
    protected $listeners=['updateSendMessage'];
    function updateSendMessage(Conversation $conversation, User $receiver) {
        $this->selectedConversation = $conversation;
        $this->receiverInstance = $receiver;
        
    }

    function sendMessage() {
        if($this->body == null){
            return null;
        }
        $createdMessage = Message::create([
            'conversation_id'=>$this->selectedConversation->id,
            'sender_id'=>auth()->id(),
            'receiver_id'=>$this->receiverInstance->id,
            'body'=>$this->body,
        ]);
        $this->selectedConversation->last_time_message=$createdMessage->created_at;
        $this->selectedConversation->save();
        $this->dispatch('pushMessage',$createdMessage->id)->to('chat.chatbox'); 
        $this->dispatch('refresh')->to('chat.chat-list');
        $this->reset('body'); 
    }
    public function render()
    {
        return view('livewire.chat.send-message');
    }
}
