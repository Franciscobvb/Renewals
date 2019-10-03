$(document).ready(function() {
    $('#cardNumber').keypress(validateNumber);
    $('#securityCode').keypress(validateNumber);
    $('#expireMonth').keypress(validateNumber);
    $('#expireYear').keypress(validateNumber);
    $('#zipCode').keypress(validateNumber);
});

function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } 
    else if (key < 48 || key > 57) {
        return false;
    }
    else {
        return true;
    }
};

function validateLengtCard(){
    var cardnumber = $('#cardNumber').val();
    if(cardnumber.length < 16){
        M.toast({html: 'THE SIZE OF THE CARD NUMBER IS INCORRECT, THE CORRECT SIZE IS OF 16 NUMBERS', classes: 'rounded'});
    }
}

function validateLengtSecureCode(){
    var securityCode = $('#securityCode').val();
    if(securityCode.length < 3){
        M.toast({html: 'THE SIZE OF THE PIN IS INCORRECT, THE CORRECT SIZE IS OF 3 NUMBERS', classes: 'rounded'});
    }
}

$("input:checkbox").click(function(){
    if($(this).prop('checked')){
        $('#continuePayment').removeAttr("disabled");
    }
    else{
        $("#continuePayment").attr("disabled", true);
    }
});