var emailError = document.getElementById('email-error');
var messageError = document.getElementById('message-error');

function emailkontrol()
{
    var email = document.getElementById('exampleFormControlInput1').value;

    if (!email.match(/^[^ ]+@[^ ]+\.[a-z]{2,3}$/))
    {
        emailError.innerHTML = "Geçersiz E-Posta Adresi";
        return false;
    }

    else
    {
        emailError.innerHTML = "Geçerli E-Posta Adresi";
        return true;
    }
}

function messagekontrol() 
    {
        var message = document.getElementById('exampleFormControlTextarea1').value;

        if (message=="")
        {
            messageError.innerHTML = "Burası Boş Bırakılamaz";
            return false;
        }

        else
        {
            messageError.innerHTML = "";
            return true;
        }

    }