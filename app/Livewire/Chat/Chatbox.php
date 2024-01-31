<?php

namespace App\Livewire\Chat;

use App\Events\MessageSent;
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
    public $height;
    //protected $listeners=['loadConversation','pushMessage','loadmore','updateHeight'];
    public function getListeners(){
        $auth_id = auth()->user()->id;
        return [
            "echo-private:chat. {$auth_id}, MessageSent" => 'broadcastedMessageReceived',
            'loadConversation','pushMessage','loadmore','updateHeight'
        ];
    }
    
    function broadcastedMessageReceived($event) {
        dd($event);
    }
    function pushMessage($messageId){
        $newMessage = Message::find($messageId);
        $this->messages->push($newMessage);
        $this->dispatch("rowChatToBottom");
    }

    function loadmore(){
        $this->paginateVar=$this->paginateVar + 10;
        $this->messagesCount = Message::where('conversation_id', $this->selectedConversation->id)->count();
        $this->messages = Message::where('conversation_id', $this->selectedConversation->id)
            ->skip($this->messagesCount - $this->paginateVar)
            ->take($this->paginateVar)
            ->get();
        $this->dispatch("chatSelected");
        $height= $this->height;
        $this->dispatch('updatedHeight', height: $height); 
    
    }

    function updateHeight($height) {
        dd($height);
    }

    public function loadConversation(Conversation $conversation, User $receiver)
    {
        $this->selectedConversation = $conversation;
        $this->receiverInstance = $receiver;
        
        $this->messagesCount = Message::where('conversation_id', $this->selectedConversation->id)->count();
        $this->messages = Message::where('conversation_id', $this->selectedConversation->id)
            ->skip($this->messagesCount - $this->paginateVar)
            ->take($this->paginateVar)
            ->get();
            $this->dispatch("chatSelected");
    }
    public function render()
    {
        return view('livewire.chat.chatbox');
    }
}
