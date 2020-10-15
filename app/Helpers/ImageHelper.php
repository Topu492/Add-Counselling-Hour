<?php
namespace  App\Helpers;

use  App\User;
use App\Helpers\GravatarHelper;
class  ImageHelper  {

    public static  function  getUserImage($id)
    {
        // write code here ...
        $user = User::find($id);
        $avatar_url =  "";
        if(!is_null($user))
        {
            if ($user->profile_image == NULL) {
                // code ..
                if (GravatarHelper::validate_gravatar($user->email)) {
                    $avatar_url = GravatarHelper::gravatar_image($user->email, 70);
                } else {
                    // when there no gv image
                    $avatar_url = url('default/default.png');
                }
            } else {
                // return that image
                $avatar_url = url('default/'.$user->profile_image);
            }
        } else {
          //  return  redirect('/');
        }

return $avatar_url;
    }

}
