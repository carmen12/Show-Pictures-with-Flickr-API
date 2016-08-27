//Problem: Hints are shown even when form is valid
//Solution: Hide and show them  when needed
var $password = $("#password");
var $confirmPassword = $("#confirm_password");


//Hide hints
$("form span").hide();

function isPasswordValid(){
    return $password.val().length > 8;
}

function arePasswordsMatching(){
    return $password.val() === $confirmPassword.val();
}
function canSubmit(){
    return isPasswordValid() && arePasswordsMatching();
}

function passwordEvent(){
    //Find out if password is valid
    if(isPasswordValid()){
        //Hide hint if valid
        $password.next().hide();
    }else{
        //else show hint
        $password.next().show();
    }
}

function confirmPasswordEvent(){
    //Find out if password match
    if( arePasswordsMatching()){
        //Hide hint if match
        $confirmPassword.next().hide();
    }else{
        //else show hint
        $confirmPassword.next().show();
    }
}

function enableSubmitEvent(){
    $("#submit").prop("disabled",!canSubmit());
}

//When event on password form
$password.focus(passwordEvent).keyup(passwordEvent).keyup(confirmPasswordEvent).keyup(enableSubmitEvent);
//When event on confirmation form
$confirmPassword.focus(confirmPasswordEvent).keyup(confirmPasswordEvent).keyup(enableSubmitEvent);

//canSubmit();
enableSubmitEvent();
