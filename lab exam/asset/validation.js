
function checkAlphabet(alphabet)
{
    return ((alphabet < 'a' || alphabet > 'z') && (alphabet <'A' || alphabet > 'Z'));

    
}   

function isValidName() {
    let name = document.getElementById('dname').value;

    if (name.length === 0) 
    {
        document.getElementById('NameError').innerHTML = "Name cannot be empty";
        return false;
    } 

    else if (checkAlphabet(name))
    {
        document.getElementById('NameError').innerHTML = "Name need to be alphabet";
        return false;
    }

    else if (name.length < 4) 
    {
        document.getElementById('NameError').innerHTML = "Name must be greater than 3 characters";
        return false;
    } 
    else 
    {
        document.getElementById('NameError').innerHTML = "";
        return true;
    }
    
}

function isValidPhoneNumber()
{

    let phoneNumber = document.getElementById('dphone').value;

    if (phoneNumber.length === 0) 
    {
        document.getElementById('ErrorPhone').innerHTML = "Phone Number cannot be empty";
        return false;
    } 
    else if (phoneNumber.length <11 || phoneNumber.length >11) 
    {
        document.getElementById('ErrorPhone').innerHTML = "Invalid Phone Number";
        return false;
    } 
    else if(phoneNumber.length === 11)
    {
        document.getElementById('ErrorPhone').innerHTML = "";
        return true;
    }
}

function isValidPassword()
{
    let password = document.getElementById('dpassword').value;

    if(password.length === 0)
    {
        document.getElementById('PassError').innerHTML = "Password Cannot be Empty";
        return false;
    }
    
    else if (password.length <8)
    {
        document.getElementById('PassError').innerHTML = "Password Needs to be greater than 8";
        return false;
    }

    else
    {
        document.getElementById('PassError').innerHTML = "";
        return true;
    }
}

function isValidusername()
{
    let Address = document.getElementById('daddress').value;

    if(Address.length == 0)
    {
        document.getElementById('ErrorAddress').innerHTML = "This section can not be empty";
        return false;
    }
    else if(Address.length <21)
    {
        document.getElementById('ErrorAddress').innerHTML = "Address limit is 20";
        return false;
    }
    else
    {
        document.getElementById('ErrorAddress').innerHTML = "";
        return true;
    }
    
}

function IsvalidForm()
{


    if(isValidName() === false || isValidPhoneNumber() === false || isValidPassword() === false || isValidusername() === false)
    {
        return false;
    }

    else
    {
        
        return true;
    }


}