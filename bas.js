    function validateForm()
    {
        var a=document.forms["mockupbas"]["fname"].value;
        if (a == "" || a == null)
        {
            alert("You must enter a first name");
            return false;
        }
        
        var b=document.forms["mockupbas"]["lname"].value;
        if (b == "" || b == null)
        {
            alert("You must enter a last name");
            return false;
        }
        
        
        
        var c=document.forms["mockupbas"]["sid"].value;
        
        if(newStudent == false) {
            if(c.length != 9)
            {
                alert("This is not a valid SID");
                return false;
            }
        }
        
        var d=document.forms["mockupbas"]["email"].value;
        var atpos = d.indexOf("@");
        var dospos = d.lastIndexOf(".");
        if (d != "" || d != null)
        {
           if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 > d.length)
            {
                alert("This is not a valid email");
                return false;
            } 
        }
        return true;
    }
