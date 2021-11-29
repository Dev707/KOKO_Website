function validate(e) {
    var regex = RegExp(/^[\w\d\W]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/);
    var form = document.forms['KOKOForm'];

    var email = form['email'];
    if (regex.test(email.value)) {
        return true
    }

    document.getElementById('emailerrormessagevalidate').hidden = false;
    email.focus();
    email.select();
    return false;

}