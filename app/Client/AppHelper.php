<?php

namespace App\Client;

class AppHelper {

    public function getAdminRoute($route)
    {
        return route('admin.'.$route);
    }

    public function showValidationMessage($errors, $field)
    {
        if ($errors->has($field))
            echo '<span class="help-block">'.$errors->first($field).'</span>';

    }

    public function ShowValidationClass($errors, $field)
    {
        if ($errors->has($field))
            return 'has-error';
    }

    public function getFormValue($key, $data)
    {
        if (old($key))
            return old($key);

        if (isset($data['row']) && is_object($data['row'])) {
            return $data['row']->$key;
        }

        return $data;
    }

    public function getFormStatus($action, $data = '')
    {
        $email = '';
        $phone = '';
        $none = 'checked';

        if (!empty($data) && $data['row']->prefer_contact == 'email') {

            $email = 'checked';
            $phone = '';
            $none  = '';
        }

        if (!empty($data) && $data['row']->prefer_contact == 'phone') {

            $email = '';
            $phone = 'checked';
            $none  = '';
        }

        if (old('prefer_contact')) {

            if (old('prefer_contact') == 'email') {

                $email = 'checked';
                $phone = '';
                $none = '';

            }
            elseif(old('prefer_contact') == 'phone') {

                $email = '';
                $phone = 'checked';
                $none = '';

            }
            else {

                $email = '';
                $phone = '';
                $none  = 'checked';
            }
        }

        if ($action == 'email')
            return $email;

        if ($action == 'phone')
            return $phone;

        return $none;
    }

    //Get Logged in user na
    public function getUserName(){
        $username = auth()->user()->name;

        return $username;
    }

    //Format Date to insert in database
    public function formatDate($format, $date)
    {
        return date($format, strtotime($date));
    }

}