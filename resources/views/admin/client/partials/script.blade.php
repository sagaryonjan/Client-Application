<script src="{{ asset('js/jquery.validate.min.js') }}"></script>

<script type="text/javascript">
    $( document ).ready( function () {
        $( "#signupForm" ).validate( {
            rules: {
                name: "required",
                birth_date: "required",
                phone: {
                    required: true,
                    minlength: 2
                },
                address: {
                    required: true,
                    minlength: 5
                },
                nationality: {
                    required: true,
                    minlength: 5
                },

                email: {
                    required: true,
                    email: true
                },
            },
            messages: {
                name: "Please enter your name",
                birth_date: "Please enter your birth_date",
                phone: {
                    required: "Please enter a phone number",
                },
                address: {
                    required: "Please enter your address",
                    minlength: "Your password must be at least 5 characters long"
                },

                email: "Please enter a valid email address",
                nationality: "Please accept our policy"
            },
            errorElement: "em",
            errorPlacement: function ( error, element ) {
                // Add the `help-block` class to the error element
                error.addClass( "help-block" );

                if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.parent( "label" ) );
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