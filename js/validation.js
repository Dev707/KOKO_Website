function validate(e) {
    var Phoneregex = RegExp(/^((?:[+?0?0?966]+)(?:\s?\d{2})(?:\s?\d{7}))$/);
    var Emailregex = RegExp(/^[\w\d\W]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/);
    var form = document.forms['KOKOForm'];

    var phone = form['phone'];
    var email = form['email'];
    if (!Phoneregex.test(phone.value) || !Emailregex.test(email.value)) {
        if (!Phoneregex.test(phone.value)) {
            document.getElementById('phoneError').hidden = false;
            phone.focus();
            phone.select();
        } else {
            document.getElementById('phoneError').hidden = true;
        }

        if (!Emailregex.test(email.value)) {
            document.getElementById('emailerrormessagevalidate').hidden = false;
            email.focus();
            email.select();
        } else {
            document.getElementById('emailerrormessagevalidate').hidden = true;
        }
        return false;
    }
    if (Phoneregex.test(phone.value) && Emailregex.test(email.value)) {
        return true;
    }
}