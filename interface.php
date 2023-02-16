<?php

interface User{
    public function renderPage(): string;
}

class Admin implements User {
    public function renderPage(): string
    {
        return '<html><h1>Admin Page</h1></html>';
        
        
    }
}

class Moderator implements User {
    public function renderPage(): string
    {
        return '<html><h1>Moderator Page</h1></html>';
        
        
    }
}

class Guest implements User {
    public function renderPage(): string
    {
        return '<html><h1>Guest Page</h1></html>';
        
        
    }
}

function renderPage(User $user): void
{
    echo $user->renderPage();

}
$user1 = new Admin();
renderPage($user1);
