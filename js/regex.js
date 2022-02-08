function provera(){
// vrednosti
let ime = $("#fname").val();
let prezime = $("#lname").val();
let email = $("#email").val();
let password = $("#password").val();
let confirmPassword = $("#confirmPassword").val();
// vrednosti
// regularni izrazi
let regexIme = /^[A-Z][a-z]{2,29}$/;
let regexPrezime = /^[A-Z][a-z]{2,59}$/;
let regexMail = /^\w+[\d\w\.\-\_]+\@[a-z]{2,10}(\.[a-z]{2,3})+$/;
let regexPassword = /^.{4,50}$/;
// regularni izrazi
// greske za prikaz
let incorIme = $('#imeError');
let incorPrezime = $('#prezimeError');
let incorMail = $('#emailError');
let incorPassword = $('#passwordError')
// greske za prikaz
// provere
if(!proverePolja(ime,regexIme,incorIme))
    return false
if(!proverePolja(prezime,regexPrezime,incorPrezime))
    return false
if(!proverePolja(email,regexMail,incorMail))
    return false
if(!proverePolja(password,regexPassword,incorPassword))
    return false
if(!uporediPassword(password,confirmPassword))
    return false
    showAffirmationMessageAndClearTextValues();
    return false; // RETURNING FALSE IF NO PHP IS IMPLEMENTED!!!
// provere
}
function showAffirmationMessageAndClearTextValues(){
if($('#registrationSuccessful').hasClass('d-none')){
    $('#registrationSuccessful').removeClass("d-none")
    $('#registrationSuccessful').fadeIn("slow")
$("#fname").val("");
$("#lname").val("");
$("#email").val("");
$("#password").val("");
$("#confirmPassword").val("");
}
}
