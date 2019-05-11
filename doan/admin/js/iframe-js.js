// JavaScript Document
// JavaScript Document
var show1=false;
	var iseditmode1=true;
	function execmd(command){
		
		richtext1.document.designMode='On';
		richtext1.document.execCommand(command,false,null);
		
	}
	function execmdwitharg(command,arg){
		richtext1.document.execCommand(command,false,arg);
	}
	function toggleSource(){
		if(show1){
			richtext1.document.getElementsByTagName('body')[0].innerHTML=richtext1.document.getElementsByTagName('body')[0].textContent;
			show1=false;
		}
		else{
			richtext1.document.getElementsByTagName('body')[0].textContent=richtext1.document.getElementsByTagName('body')[0].textContent;
			show1=false;
			show1=true;
		}
	}
	function toggleEdit()
	{
		if(iseditmode1){
			richtext1.document.designMode='Off';
			iseditmode1=false;
		}
		else{
			richtext1.document.designMode='true';
			iseditmode1=true;
		}
	}