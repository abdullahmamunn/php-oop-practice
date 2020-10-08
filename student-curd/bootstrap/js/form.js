function checkFirstname()
{
    var getFirstName = $('#firstName').val();
    if(getFirstName.length>=3 && getFirstName.length<=10)
    {
        $('#firstNameErr').text(" ");
    }
    else
    {
        $('#firstNameErr').text("First Name should be between 3 to 10 characters");
    }
}

$('#firstName').click(function () {
    checkFirstname();
});
$('#firstName').blur(function () {
   checkFirstname();
});
$('#firstName').keyup(function () {
    checkFirstname();
});


function checkLastname()
{
    var getLastName = $('#lastName').val();
    if(getLastName.length>=3 && getLastName.length<=10)
    {
        $('#lastNameErr').text(" ");
    }
    else
    {
        $('#lastNameErr').text("Last Name should be between 3 to 15 characters");
    }
}

$('#lastName').click(function () {
    checkLastname();
});
$('#lastName').blur(function () {
    checkLastname();
});
$('#lastName').keyup(function () {
    checkLastname();
});

function validateEmail() {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(emailReg.test($('#email').val()))
    {
        $('#emailAddresErr').text(' ');
    }
    else{
        $('#emailAddresErr').text('Email is not Valid');
    }
}
$('#email').click(function () {
    validateEmail();
});
$('#email').blur(function () {
    validateEmail();
});
$('#email').keyup(function () {
    validateEmail();
});

function checkPassword()
{
    var pass = $('#password').val();
    var confirmpass = $('#confirmPassword').val();
    if (pass != confirmpass){
        $('#confirmPasswordErr').text("Password does not match!");
    }
    else{
        $('#confirmPasswordErr').text("");
    }
}
$('#password').keyup(function () {
    var pswd = $('#password').val();
    if (pswd.length<6)
    {
        $('#passwordErr').text("Password Must be at least 6 character");
    }
    else{
        $('#passwordErr').text(' ');
    }
});

$('#confirmPassword').keyup(function () {
    checkPassword();
});


$('#formValidation').submit(function () {

    var FirstName = $('#firstName').val();
    var LastName = $('#lastName').val();
    var getEmail = $('#email').val();
    var pass = $('#password').val();
    var confirmpass = $('#confirmPasswordpassword').val();
    if (FirstName == '' || LastName == '' || getEmail == '' || pass == '')
    {
        return false;
    }
    else if(pass.length !=confirmpass.length){
        return false;
    }
    else{
        return true;
    }
});