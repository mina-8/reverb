<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
Broadcast::channel('orders' , function(){
    return auth('web')->check();
});
Broadcast::channel('message', function ($user) {
    // return true; // أو تحقق من $user إن أردت حماية
    return auth('web')->check();
});
