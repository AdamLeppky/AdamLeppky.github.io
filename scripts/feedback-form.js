
function onFeedbackSubmit()
{
    console.log('Feedback processing...');
    var rating = getRating(5);

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

function getRating(ratingCount) {
    for (var i = 1; i < ratingCount; i++) {
        var className = "rating-" + i;
        if (document.getElementById(className).checked) {
            return i.toString();
        }
    }
    return "";
}

function checkEmailValid(address)
{
    var p = address.search(/.+@.+/);
    return p == 0;
}