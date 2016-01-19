function nolike()
{
	alert("Please login to like");
}



function gotow(geturl)
{
	window.location=geturl;
}

function like(get_id,title,likes,like_id)
{
	//alert(like_id);
	//blog_like_buttonw = document.getElementById(like_id);
	//blog_like_buttonw.removeAttribute("value");
	
	var hr = new XMLHttpRequest();
  			hr.open("POST", "givelike.php", true);
   			 hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   			 hr.onreadystatechange = function() 
   			 {
   			   if(hr.readyState == 4 && hr.status == 200) 
    		  {
    		  		var f = hr.responseText;
    		  		blog_like_buttonw = document.getElementById(like_id);
              var slike = document.getElementById('slike');
    		  		//alert(f);
    		  		//blog_like_buttonw.removeAttribute("value");
    		  		if(f!="S1")
    		  		{
    		  		blog_like_buttonw.setAttribute("value",f);
              slike.setAttribute("value",f);
    		  	var sendlike_id = "dellike(" + get_id + ",'" + title + "',"+ likes +",'"+like_id+"');";
						blog_like_buttonw.setAttribute("onclick",sendlike_id);
            slike.setAttribute("onclick",sendlike_id);
					}
    		  	else
    		  		alert("You cannot like your own blog");
    		  		
       				    			      			  	
      			 
   				 }
				}

   				 parameters = "id=" + get_id; 
   				 hr.send(parameters);
   				 

}

function dellike(get_id,title,likes,like_id)
{
	//alert(like_id);
	//blog_like_buttonw = document.getElementById(like_id);
	//blog_like_buttonw.removeAttribute("value");
	
	var hr = new XMLHttpRequest();
  			hr.open("POST", "del_like.php", true);
   			 hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   			 hr.onreadystatechange = function() 
   			 {
   			   if(hr.readyState == 4 && hr.status == 200) 
    		  {
    		  		var f = hr.responseText;
    		  		blog_like_buttonw = document.getElementById(like_id);

    		  		//alert(f);
    		  		//blog_like_buttonw.removeAttribute("value");
    		  		if(f!="S1")
    		  		{
    		  			blog_like_buttonw.setAttribute("value",f);
    		  			var sendlike_id = "like(" + get_id + ",'" + title + "',"+ likes +",'"+like_id+"');";
						blog_like_buttonw.setAttribute("onclick",sendlike_id);
					}
    		  	else
    		  		alert("You cannot like your own blog");
    		  		
       				    			      			  	
      			 
   				 }
				}

   				 parameters = "id=" + get_id; 
   				 hr.send(parameters);
   				 

}

function page(get_id,get_title)
{
	/*
	var hr = new XMLHttpRequest();
	var path = "index.php?id=" + get_id + "&title=" + get_title;
	hr.open("GET", "index.php", true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() 
    {
	    if(hr.readyState == 4 && hr.status == 200) 
	    {
		   
		   //alert(hr.responseText);
	    	}

    }

    parameters = "blog_id=" + blog_char; 
    hr.send(parameters);
window.location="http://localhost/test/blogdisplay.html";
	*/
	//alert(get_id,get_title);
	var path = "index.php?id=" + get_id + "&title=" + get_title;
	window.location=path;


}



function blogdisplay()

{
	var disp = document.getElementById('blogview');

	var hr = new XMLHttpRequest();
	hr.open("POST", "readblog.php", true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() 
    {
	    if(hr.readyState == 4 && hr.status == 200) 
	    {
		   
		   disp.innerHTML = hr.responseText;
	    }

    }

   // parameters = "blog_id=" + blog_char; 
    hr.send(null);



	//disp.innerHTML = "sdadas";
}



function check()
{
//alert ("Dasdas");

var hr = new XMLHttpRequest();
  hr.open("POST", "check.php", true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() 
    {
      if(hr.readyState == 4 && hr.status == 200) 
      {
       
       var f = hr.responseText;
       //alert(f);
       if (f!='no')
       {
       document.getElementById("in").style.display = 'block';
          document.getElementById("out").style.display = 'none';
          user = f;
          user = user + "<b class='caret'></b>";
          document.getElementById("xx").innerHTML = user;
       }
       else
       {
       document.getElementById("out").style.display = 'block';
       }
       
      }
    }

    //parameters = "user=" + user + "&pass=" + pass; 
    hr.send();


}

function outg()
{
	//alert("out");

	var hr = new XMLHttpRequest();
  hr.open("POST", "endsession.php", true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() 
    {
      if(hr.readyState == 4 && hr.status == 200) 
      {
       
       var f = hr.responseText;
       alert(f);
       window.location = "../../home/index.html";
    }
}

    //parameters = "user=" + user + "&pass=" + pass; 
    hr.send();

}

function page2(get_id,get_title,id)
{
  
  var popup = document.getElementById('photodisp');
  popup.style.display = "block";
  var path = "blogs/blog"+get_id+"/0.jpg";
  document.getElementById('picdisp').src = path;
  document.getElementById('stitle').innerHTML = get_title ;
  //alert(id);
  var n = id.toString();
  n = "like"+n;

var hr = new XMLHttpRequest();
  hr.open("POST", "getdescription.php", true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() 
    {
      if(hr.readyState == 4 && hr.status == 200) 
      {
       
       var str = hr.responseText;
       //alert(str);
       var res = str.split("%");

       //window.location = "../../home/index.html";
       document.getElementById('content').innerHTML = res[0];
       document.getElementById('name').innerHTML = res[1];
    }
}

    parameters = "bid=" + get_id; 
    hr.send(parameters);



  var x = document.getElementById(n).getAttribute('onclick');
  var y = document.getElementById(n).getAttribute('value');
  var slike = document.getElementById('slike');
  slike.setAttribute('onclick',x);
  slike.setAttribute('value',y);
  document.getElementById('max').setAttribute('onclick',"page3("+get_id+",'"+get_title+"')");
  document.getElementById('picdisp').setAttribute('onclick',"page3("+get_id+",'"+get_title+"')");
  //alert(x);


}

function page3(get_id,get_title)
{
  
  var path = "picdisp.php?id=" + get_id + "&title=" + get_title;
  window.location=path;


}

function comment(blog_id,title)
{

  var hr = new XMLHttpRequest();
  hr.open("POST", "comments/comments.php", true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() 
    {
      if(hr.readyState == 4 && hr.status == 200) 
      {
       
       var f = hr.responseText;
        if(f=="1")
          location.reload();
        else
          alert("Please login to commennt");
    }
}
if(title != "RX#$%_-%!896/")
{
    var comments = document.getElementById('ca').value;
    parameters = "comments=" + comments + "&blog_id=" + blog_id + "&title=" + title; 
    hr.send(parameters);
  }
  else
    alert("Please login to commment");

}
