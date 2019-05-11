// JavaScript Document
// JavaScript Document
// JavaScript Document
var show1=false;
	var iseditmode1=true;
	function execmd(command){
		
		richtext2.document.designMode='On';
		richtext2.document.execCommand(command,false,null);
		
	}
	function execmdwitharg(command,arg){
		richtext2.document.execCommand(command,false,arg);
	}
	function toggleSource(){
		if(show1){
			richtext2.document.getElementsByTagName('body')[0].innerHTML=richtext2.document.getElementsByTagName('body')[0].textContent;
			show1=false;
		}
		else{
			richtext2.document.getElementsByTagName('body')[0].textContent=richtext2.document.getElementsByTagName('body')[0].textContent;
			show1=false;
			show1=true;
		}
	}
	function toggleEdit()
	{
		if(iseditmode1){
			richtext2.document.designMode='Off';
			iseditmode1=false;
		}
		else{
			richtext2.document.designMode='true';
			iseditmode1=true;
		}
	}