<?php

namespace App\Helper;

class AppHelper {

    /**
     * Generates html according to message_type and stores in
     * session flash storage
     *
     * @param $message_type bootstrap alert message type
     * @param $message html message
     */
    public function flash($message_type, $message)
    {
        $message_type = $this->checkBootstrapAlertClass($message_type);

        $message = "<div class=\"alert alert-" . $message_type . "\">
                        <button data-dismiss=\"alert\" class=\"close\" type=\"button\">
                            <i class=\"icon-remove\"></i>
                        </button>
                        " . $message . "
                        <br>
					</div>";

        request()->session()->flash('message', $message);
    }

    protected function checkBootstrapAlertClass($message_type)
    {
        $classes = ['info', 'success', 'warning', 'danger'];
        if (!in_array($message_type, $classes)) {
            return 'info';
        }

        return $message_type;
    }

    public function getAdminRoute($route, $id = null)
    {
        if($id == null)
            return route('admin.'.$route);
        else
            return route('admin.'.$route, $id);
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

    public function getRadioFormValue($field, $value, $data=''){

        if (old($field) == $value)
                 return 'checked';

        if (!empty($data) && $data['row']->$field == $value)
                return 'checked';

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