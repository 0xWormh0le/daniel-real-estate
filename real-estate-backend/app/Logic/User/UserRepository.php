<?php

namespace App\Logic\User;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class UserRepository
{
    public function storeUser($params)
    {
        $user;
        $profile;
        if (isset($params['id'])) {
            $user = User::find($params['id']);
            if (!$user) {
                return null;
            }
            $profile = $user->profile;
        } else {
            $user = new User;
            $profile = new Profile;
        }

        $user->email = $params['email'];
        $user->password = bcrypt($params['password']);
        if (isset($params['company_id'])) {
            $user->company_id = $params['company_id'];
        }

        $user->first_name = $params['first_name'];
        $user->last_name = $params['last_name'];
        $user->user_type = $params['user_type'];
        if ($params['newsletter']) {
            $user->newsletter = $params['newsletter'];
        }

        $user->save();

        $profile->user_id = $user->id;
        if (isset($params['description'])) {
            $profile->description = $params['description'];
        }
        if (isset($params['organization'])) {
            $profile->organization = $params['organization'];
        }
        if (isset($params['phone'])) {
            $profile->phone = $params['phone'];
        }
        if (isset($params['facebook'])) {
            $profile->facebook = $params['facebook'];
        }
        if (isset($params['twitter'])) {
            $profile->twitter = $params['twitter'];
        }
        if (isset($params['linkedin'])) {
            $profile->linkedin = $params['linkedin'];
        }
        if (isset($params['instagram'])) {
            $profile->instagram = $params['instagram'];
        }
        if (isset($params['website'])) {
            $profile->website = $params['website'];
        }
        
        $profile->save();

        return $user;
    }

}
