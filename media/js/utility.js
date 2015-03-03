function hideDiv($id) 
{ 
    if (document.getElementById) 
    { 
        document.getElementById($id).style.visibility = 'hidden'; 
        document.getElementById('fade').style.visibility = 'hidden';
    } 
    else 
    { 
        if (document.layers) 
        {  
            document.$id.visibility = 'hidden'; 
        } 
        else 
        {
            document.all.$id.style.visibility = 'hidden'; 
        } 
    } 
}