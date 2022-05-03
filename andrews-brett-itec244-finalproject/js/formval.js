function Validateform()
{

		var a, i, title, f_name, l_name, address, gender, vhobby, email, user, pword, cPword, error, check;
		a=0;
		error=false;
		check=false;
		
		
var regex = /^[a-zA-Z\s\-]+$/;
		
		title=document.getElementById('title').value;
		f_name=document.getElementById('fname').value;
		l_name=document.getElementById('lname').value;
		address=document.getElementById('address').value;
		gender=document.getElementsByName('gender');
		vhobby=document.getElementsByName('vhobby[]');
		user=document.getElementById('user').value;
		email=document.getElementById('email').value;
		pword=document.getElementById('pword').value;
		cPword=document.getElementById('c-pword').value;
	
		if(title=="" || title==null)
		{
			
			alert('please select a title');
			error=true;
			return false;		
			
		}
		
		if(f_name=="" || f_name==null)
		{
			
			alert('please enter your first name');
			error=true;
			return false;		
			
		}
		
		if(l_name=="" || l_name==null)
		{
			
			alert('please enter your last name');
			error=true;
			return false;		
			
		}
			
		if(regex.test(f_name)==false)
		{
			
			alert('only letters, whitespaces and hyphens allowed');
			error=true;
			return false;
			
		}
		
		if(regex.test(l_name)==false)
		{
			
			alert('only letters, whitespaces and hyphens allowed');
			error=true;
			return false;
			
		}
		
		
		
		if(address=="" || address==null)		
		{
			
			alert('please enter an address');
			error=true;
			return false;		
			
		}


		for(i=0; i<gender.length; i++)
		{
			
			if(gender.item(i).checked==false)
			{
				
					a++;
				
			}
			
		}
		
		
		if(a==gender.length)
		{
			
			alert('please select a gender');
			error=true;
			return false;
			
		}
		
		a=0;
		
		
		for(i=0; i<vhobby.length; i++)
		{
			
			if(vhobby.item(i).checked==false)
			{
				
					a++;
				
			}
			
		}
		
		
		if(a==vhobby.length)
		{
			
			alert('please select at least one hobby');
			error=true;
			return false;
			
		}
		
		a=0;
		
		
		if(user=="" || user==null)		
		{
			
			alert('please enter an username');
			error=true;
			return false;	
			
		}
		
		if(email=="" || email==null)		
		{
			
			alert('please enter a email');
			error=true;
			return false;		
			
		}
		
		
		
		
		if(pword=="" || pword==null)				
		{
			
			alert('please enter a password');
			error=true;
			return false;		
			
		}
		
		
		if(cPword=="" || cPword==null)		
		{
			
			alert('please confirm your Password');
			error=true;
			return false;		
			
		}

		
		
		if(pword!=cPword)		
		{
			
			alert('your password does not match');
			error=true;
			return false;		
			
		}
		
		
		if(error==false)
		{
			
			alert('thank you for registering');
			return true;
			
		}
	
	
		
	
}

function vimages(){
	

	
	var imagen, iname, mage, error, check;
		
		error=false;
		check=false;
	
		imagen=document.getElementById('image2').value;
		iname=document.getElementById('iname1').value;
		mage=document.getElementById('image1').value;
		tag=document.getElementById('tags').value;
		
		if(imagen=="" || imagen==null)		
		{
			
			alert('please enter a image name');
			error=true;
			return false;		
			
		}
		
		if(iname=="" || iname==null)		
		{
			
			alert('please enter a description');
			error=true;
			return false;		
			
		}
		
		if(tag=="" || tag==null)		
		{
			
			alert('please enter at least one hashtag');
			error=true;
			return false;		
			
		}
		
		
		if(mage=="" || mage==null)		
		{
			
			alert('please upload an iamge');
			error=true;
			return false;		
			
		}
		
}


function feedback(){
	

	
	var title, feed, error, check;
		
		error=false;
		check=false;
	
		title=document.getElementById('title').value;
		feed=document.getElementById('feed').value;
	
		
		if(title=="" || title==null)		
		{
			
			alert('please enter a title');
			error=true;
			return false;		
			
		}
		
		if(feed=="" || feed==null)		
		{
			
			alert('please enter a feedback');
			error=true;
			return false;		
			
		}
		
		
	
		
}

function comment(){
	
	var comment, error, check;
	
	error=false;
	check=false;
	
	comment=document.getElementById('com').value;
	
	if(comment=="" || comment==null)		
		{
			
			alert('please enter a comment');
			error=true;
			return false;		
			
		}
	
	
}


function search(){
	
	var search, error, check;
	
	error=false;
	check=false;
	
	search=document.getElementById('search').value;
	
	if(search=="" || search==null)		
		{
			
			alert('please enter a word to search');
			error=true;
			return false;		
			
		}
	
	
}


function login(){
	
	error=false;
	check=false;
	
	email=document.getElementById('email').value;
	pword=document.getElementById('pword').value;
	
	if(email=="" || email==null)		
		{
			
			alert('please enter a email');
			error=true;
			return false;		
			
		}
		
		
		if(pword=="" || pword==null)		
		{
			
			alert('please enter a password');
			error=true;
			return false;		
			
		}
	
	
}


