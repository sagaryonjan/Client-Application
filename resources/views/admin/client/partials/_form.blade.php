<div class="row">
    <div class="col-lg-6">
        <div class="form-group {{ AppHelper::ShowValidationClass($errors, 'name') }}">
            <label>Name:</label>
            <input type="text" name="name" value="{{ AppHelper::getFormValue('name', isset($data)?$data:'' ) }}"
                   placeholder="Enter Client Name" class="form-control" id="name">
            {{ AppHelper::showValidationMessage($errors, 'name') }}
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group {{ AppHelper::ShowValidationClass($errors, 'birth_date') }}">
            <label>Date of Birth:</label>
            <input type="text" value="{{ AppHelper::getFormValue('birth_date', isset($data)?$data:'' ) }}"
                   name="birth_date" placeholder="Enter Date of Birth" class="form-control datepicker" id="birth_date">
            {{ AppHelper::showValidationMessage($errors, 'birth_date') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group {{ AppHelper::ShowValidationClass($errors, 'phone') }}">
            <label>Phone:</label>
            <input type="text" name="phone" value="{{ AppHelper::getFormValue('phone', isset($data)?$data:'' ) }}"
                   placeholder="Enter Phone No." class="form-control" id="phone">
            {{ AppHelper::showValidationMessage($errors, 'phone') }}
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group {{ AppHelper::ShowValidationClass($errors, 'email') }}">
            <label for="email">Email:</label>
            <input type="text" name="email" value="{{ AppHelper::getFormValue('email', isset($data)?$data:'' ) }}"
                   placeholder="Enter Email" class="form-control" id="email">
            {{ AppHelper::showValidationMessage($errors, 'email') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group {{ AppHelper::ShowValidationClass($errors, 'address') }}">
            <label for="address">Address:</label>
            <input type="text" name="address" value="{{ AppHelper::getFormValue('address', isset($data)?$data:'' ) }}"
                   placeholder="Address" class="form-control" id="address">
            {{ AppHelper::showValidationMessage($errors, 'address') }}
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group {{ AppHelper::ShowValidationClass($errors, 'nationality') }}">
            <label for="nationality">Nationality:</label>
            <input type="text" name="nationality"
                   value="{{ AppHelper::getFormValue('nationality', isset($data)?$data:'' ) }}"
                   placeholder="Enter Nationality" class="form-control" id="nationality">
            {{ AppHelper::showValidationMessage($errors, 'nationality') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group {{ AppHelper::ShowValidationClass($errors, 'gender') }}">
            <label for="gender">Gender:</label>
            <div id="error-wrapper">
                <label class="radio-inline">
                    <input type="radio" {{ AppHelper::getRadioFormValue('gender','male', isset($data)?$data:'') }}
                    value="male" name="gender">Male
                </label>
                <label class="radio-inline">
                    <input type="radio" {{ AppHelper::getRadioFormValue('gender', 'female', isset($data)?$data:'') }}
                           value="female" name="gender">Female
                </label>
                <label class="radio-inline">
                    <input type="radio" {{ AppHelper::getRadioFormValue('gender', 'other', isset($data)?$data:'') }}
                           value="other" name="gender">Other
                </label>
            </div>
            {{ AppHelper::showValidationMessage($errors, 'gender') }}
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group {{ AppHelper::ShowValidationClass($errors, 'prefer_contact') }}">
            <label for="gender">Prefer Mode:</label>
            <div id="error-wrapper">
                <label class="radio-inline">
                    <input type="radio" {{ AppHelper::getRadioFormValue('prefer_contact', 'email', isset($data)?$data:'') }}
                    value="email" name="prefer_contact">Email
                </label>
                <label class="radio-inline">
                    <input type="radio" {{ AppHelper::getRadioFormValue('prefer_contact', 'phone', isset($data)?$data:'') }}
                    value="phone" name="prefer_contact">Phone</label>
                <label class="radio-inline">
                    <input type="radio" {{ AppHelper::getRadioFormValue('prefer_contact', 'none', isset($data)?$data:'') }}
                    value="none" name="prefer_contact">None</label>
            </div>
            {{ AppHelper::showValidationMessage($errors, 'prefer_contact') }}
        </div>
    </div>
</div>

<div class="form-group {{ AppHelper::ShowValidationClass($errors, 'educational_background') }}">
    <label for="educational_background">Eduction Background:</label>
    <textarea id="educational_background" name="educational_background" placeholder="Enter Education Background"
              rows="6" class="form-control">{{ AppHelper::getFormValue('educational_background', isset($data)?$data:'' ) }}
    </textarea>
    {{ AppHelper::showValidationMessage($errors, 'educational_background') }}
</div>


