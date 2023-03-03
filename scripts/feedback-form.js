
function onFeedbackSubmit()
{
    console.log('Feedback processing...');
    var rating = ""
    if (document.getElementById("rating-1").checked) {
        rating = "1";
    } else if (document.getElementById("rating-2").checked) {
        rating = "2";
    } else if (document.getElementById("rating-3").checked) {
        rating = "3";
    } else if (document.getElementById("rating-4").checked) {
        rating = "4";
    } else if (document.getElementById("rating-5").checked) {
        rating = "5";
    }

    var email = document.getElementById("email").value;
    var emailValid = checkEmailValid(email);
    var emailValidMessage = "";
    if (emailValid) {
        emailValidMessage = "good";
    } else {
        emailValidMessage = "bad";
    }
    
    var messageWordCount = document.getElementById("message").value.split(' ').length;

    alert("Rating: " + rating + ". Email is " + emailValidMessage + ". Message word count: " + messageWordCount);
    console.log('Feedback submitted.');
}

function checkEmailValid(address)
{
    var p = address.search(/.+@.+/);
    return p == 0;
}