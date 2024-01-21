<?php

namespace App\Livewire\Chat;

use App\Models\Message;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\Conversation;
use App\Models\User;
class Chatbox extends Component
{
    public $selectedConversation;
    public $receiverInstance;
    public $messages;
    public $paginateVar=10;
    protected $listeners=['loadConversation'];

    public function loadConversation(Conversation $conversation, User $receiver)
    {
        $this->selectedConversation = $conversation;
        $this->receiverInstance = $receiver;
    
        $this->messagesCount = Message::where('conversation_id', $this->selectedConversation->id)->count();
        $this->messages = Message::where('conversation_id', $this->selectedConversation->id)
            ->skip($this->messagesCount - $this->paginateVar)
            ->take($this->paginateVar)
            ->get();
    }
    public function render()
    {
        return view('livewire.chat.chatbox');
    }
}
