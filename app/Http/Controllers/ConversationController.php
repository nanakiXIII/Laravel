<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreMessageRequest;
use App\Repository\ConversationRepository;

class ConversationController extends Controller
{
    /**
     * @var ConversationRepository
     */
    private $r;
    /**
     * @var AuthManager
     */
    private $auth;

    public function __construct(ConversationRepository $conversationRepository, AuthManager $auth){

        $this->r = $conversationRepository;
        $this->auth = $auth;

    }

    public function index(){
        return view('conversation/index', [
            'users' => $this->r->getConversations($this->auth->user()->id)
        ]);

    }
    public function show(User $user){
        return view('conversation/show', [
            'users' => $this->r->getConversations($this->auth->user()->id),
            'user' => $user,
            'messages' => $this->r->getMessagesFor($this->auth->user()->id, $user->id)->paginate(50)
        ]);
    }

    public function store(User $user, StoreMessageRequest $request){

        $this->r->createMessage(
            $request->get('content'),
            $this->auth->user()->id,
            $user->id
        );
        return redirect(route('conversation.show', ['id' => $user->id]));
    }
}
