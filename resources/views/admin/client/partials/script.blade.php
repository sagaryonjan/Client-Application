<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script>
    $('.datepicker').datepicker();
</script>

<script type="text/javascript">
    $( document ).ready( function () {
        $( "#signupForm" ).validate( {
            rules: {
                name: "required",
                birth_date: "required",
                phone: {
                    required: true,
                    minlength: 5
                },
                address: "required",
                nationality: {
                    required: true,
                    minlength: 5
                },
                gender: "required",
                prefer_contact: "required",
                email: {
                    required: true,
                    email: true
                },
            },
            messages: {
                name: "Please enter your name",
                birth_date: "Please enter your birth_date",
                phone: "Please enter a phone number",
                address: "Please enter your address",
                gender: "Please enter your gender",
                email: "Please enter a valid email address",
                prefer_contact: "Prefer Contact field is required",
                nationality: {
                    required: "Please enter your gender",
                },
            },
            errorElement: "em",
            errorPlacement: function ( error, element ) {
                // Add the `help-block` class to the error element
                error.addClass( "help-block" );

                if ( element.prop( "type" ) === "radio" ) {
                    error.insertAfter( element.$( "#error-wrapper" ) );
                } else {
                    error.insertAfter( element );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
            }
        } );
    } );
</script>

<!-- Google API to search location -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCU-draiV5RIPiQY_7xmuCmToSE3aFG7mk&v=3.exp&libraries=places"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        var options = {};
        var input = document.getElementById('address');
        var autocomplete = new google.maps.places.Autocomplete(input, options);
    });
</script>