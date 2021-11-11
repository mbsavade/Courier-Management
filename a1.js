function namevalidation()
{ var name =document.getElementById("commentName").value;
  if(name.length==0)
  {  produceprompt("Name is required","commentNamePrompt","red"); 
     return false; 
  }
  if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) 
  { 
    produceprompt("Name is invalid","commentNamePrompt","red");
    return false;
  }

    produceprompt("Name is valid","commentNamePrompt","green");
    return true;
}
function namevalidation1()
{ var name =document.getElementById("commentName1").value;
  if(name.length==0)
  {  produceprompt("Name is required","commentNamePrompt1","red"); 
     return false; 
  }
  if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) 
  { 
    produceprompt("Name is invalid","commentNamePrompt1","red");
    return false;
  }

    produceprompt("Name is valid","commentNamePrompt1","green");
    return true;
}


function mobilevalidation()
{ var mob =document.getElementById("commentMobile").value;
  if(mob.length==0)
  { 
     produceprompt("Contact no. is required","commentMobilePrompt","red"); 
     return false;
  }
  if(!mob.match(/^[0-9]{10}$/)) 
  { 
    produceprompt("Contact no. is invalid","commentMobilePrompt","red");
    return false;
  } 
    
    produceprompt("Contact no. is valid","commentMobilePrompt","green");
    return true;
}

function spinvalidation()
{ var spincode =document.getElementById("spin").value;
  if(spincode.length==0)
  { 
     produceprompt("Pincode is required","commentSPinPrompt","red");	 
     return false; 
  }
  if(!spincode.match(/^[0-9]{6}$/)) 
  { 
    produceprompt("Pincode is invalid","commentSPinPrompt","red");
    return false;
  } 
    
    produceprompt("Pincode is valid","commentSPinPrompt","green");
    return true;
}

function rpinvalidation()
{ var rpincode =document.getElementById("rpin").value;
  if(rpincode.length==0)
  { 
     produceprompt("Pincode is required","commentRPinPrompt","red"); 
     return false; 
  }
  if(!rpincode.match(/^[0-9]{6}$/)) 
  { 
    produceprompt("Pincode is invalid","commentRPinPrompt","red");
    return false;
  } 
    
    produceprompt("Pincode is valid","commentRPinPrompt","green");
    return true;
}

function produceprompt(msg,id,col) 
{
  document.getElementById(id).innerHTML=msg;
  document.getElementById(id).style.color=col;
}
function validation()
{
if(namevalidation())
  {if(mobilevalidation())
    { if(spinvalidation()) 
      { if(namevalidation1())
		  { if(rpinvalidation())
			  {			  
				return true;
			  }
		  }
      }
    } 
  } 

 return false;
}
function buttonact()
{ document.getElementById("Button").disabled=!validation();
}