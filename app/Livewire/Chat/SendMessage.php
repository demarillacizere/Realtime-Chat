<?php

namespace App\Livewire\Chat;

use App\Models\Conversation;
use App\Models\User;
use Livewire\Component;

class SendMessage extends Component
{
    protected $listeners=['updateSendMessage'];
    function updateSendMessage(Conversation $conversation, User $receiver) {
        $this->selectedConversation = $conversation;
        $this->receiverInstance = $receiver;
        
    }
    public function render()
    {
        return view('livewire.chat.send-message');
    }
}
