<button onClick="execmd('bold');" ><i class="fa fa-bold"></i></button>
	<button onClick="execmd('italic');" ><i class="fa fa-italic"></i></button>
	<button onClick="execmd('underline');" ><i class="fa fa-underline"></i></button>
	<button onClick="execmd('justifyleft');" ><i class="fa fa-align-left"></i></button>
	<button onClick="execmd('justifyright');" ><i class="fa fa-align-right"></i></button>
	<button onClick="execmd('justifycenter');" ><i class="fa fa-align-center"></i></button>
	<button onClick="execmd('justifyfull');" ><i class="fa fa-align-justify"></i></button>
	<button onClick="execmd('cut');" ><i class="fa fa-cut"></i></button>
	<button onClick="execmd('copy');" ><i class="fa fa-copy"></i></button>
	<button onClick="execmd('indent');" ><i class="fa fa-indent"></i></button>
	<button onClick="execmd('outdent');" ><i class="fa fa-outdent"></i></button>
	<button onClick="execmd('subscript');" ><i class="fa fa-subscript"></i></button>
	<button onClick="execmd('superscript');" ><i class="fa fa-superscript"></i></button>
	<button onClick="execmd('undo');" ><i class="fa fa-undo"></i></button>
	<button onClick="execmd('redo');" ><i class="fa fa-redo"></i></button>
	<button onClick="execmd('insertunorderedlist');" ><i class="fa fa-list-ul"></i></button>
	<button onClick="execmd('insertorderedlist');" ><i class="fa fa-list-ol"></i></button>
	<button onClick="execmd('insertparag');" ><i class="fa fa-paragraph"></i></button>
	
	<button onClick="execmd(inserthorizontalrule)" >HR</button>
	<button onClick="execmdwitharg('createlink',prompt('Enter a URL ','http://'));" ><i class="fa fa-link"></i></button>
	<button onClick="execmd('unlink');" ><i class="fa fa-unlink"></i></button>
	<button onClick="toggleSource()" ><i class="fa fa-code"></i></button>
	<button onClick="toggleEdit()" >Toggle Edit</button>
	<select onChange="execmdwitharg('formatblock',this.value)">
		<option value="H1">H1</option>
		<option value="H2">H2</option>
		<option value="H3">H3</option>
		<option value="H4">H4</option>
		<option value="H5">H5</option>
		<option value="H6">H6</option>
	</select>
	<select onChange="execmdwitharg('fontname',this.value)">
		<option value='Arial'>Arial</option>
		<option value='Comic Sans MS'>Comic Sans MS</option>
		<option value='Courier'>Courier</option>
		<option value='Georgia'>Georgia</option>
		<option value='Tahoma'>Tahoma</option>
		<option value='Times new Roman'>Times new Roman</option>
		<option value='Verdana'>Verdana</option>
	</select>
	<select onChange="execmdwitharg('fontsize',this.value)" >
	<?php
		for($i=0;$i<100;$i++){
		?>
		<option value="<?=$i?>"><?=$i?></option>
		<?php
		}
			?>
	</select>
	Fore color:<input type="color" onChange="execmdwitharg('forecolor',this.value)">
	Background:<input type="color" onChange="execmdwitharg('hilitecolor',this.value)">
	
	<button onClick="execmdwitharg('insertimage',prompt('Enter the image Url',''));" ><i class="fa fa-file-image"></i></button>
	<button onClick="execmd('selectAll')" >Select All</button>