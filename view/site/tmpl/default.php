<?php
defined('_JEXEC') or die;

//Пошаговая панель установки
echo JHtml::_('installation.stepbar'); ?>

<script type="text/javascript">
$(document).ready(function(){
		xOffset = 500;
		yOffset = 20;
	
	$(".bs-example_vyibor_shablon div.input-group label.form-control").mouseover(function(e){
	var title= jQuery(this).attr("title");
	var c = "";		
	switch (title) {
        case "vyibor_shablon0":
        c = "images/0.png";
    break;
        case "vyibor_shablon1":
        c = "images/1.png";
    break;    
        case "vyibor_shablon2":
        c = "images/2.png";
    break;	
        case "vyibor_shablon3":
        c = "images/3.png";
    break;	
        case "vyibor_shablon4":
        c = "images/4.png";
    break;
    default:
    c = "";
    break;
    }
	
		$("body").append("<p id='screenshot'><img src='"+ c +"' alt='url preview' /></p>");								 
		$("#screenshot")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX + yOffset) + "px")
			.css("z-index","9999")
			.fadeIn("fast");
		jQuery(this).mousemove(function(e){
		$("#screenshot")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX + yOffset) + "px");
	    });				
   }).mouseout(function(){			
		$("#screenshot").remove();
   });				
});


</script>
<style type="text/css">
.bs-example_dizayn::after{
    content: "Выбор шаблона Дизайна";
}
.bs-example_vyibor_sposobov_oplat::after{
    content: "Выбор способов оплат";
}
.bs-example_vyibor_sposobov_dostavki::after{
    content: "Выбор способов доставки";
}
#screenshot{
    position:absolute;
    border:1px solid #ccc;
    background:#333;
    padding:5px;
    display:none;
    color:#fff;
}
</style>
    <div class="container bs-docs-container">
	    <div class="row">
		    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">
			    <h2>Настройка сайта</h2>
			</div> 
		</div>	    
		
		<div class="btn-toolbar">
			<div class="btn-group pull-right">
				<a href="#" class="btn btn-primary" onclick="Install.submitform();" rel="next" title="<?php echo JText::_('JNext'); ?>"><span class="icon-arrow-right icon-white"></span> <?php echo JText::_('JNext'); ?></a>
			</div>
		</div>
		
		<form action="index.php" method="post" id="languageForm" class="form-horizontal">
			<div class="control-group">
				<label for="jform_language" class="control-label"><?php echo JText::_('INSTL_SELECT_LANGUAGE_TITLE'); ?></label>
				<div class="controls">
					<?php echo $this->form->getInput('language'); ?>
				</div>
			</div>
			<input type="hidden" name="task" value="setlanguage" />
			<?php echo JHtml::_('form.token'); ?>
		</form>
<?php
echo "<pre>";
print_r($this->form);
echo "</pre>";
?>
		<form action="index.php" method="post" id="adminForm" class="form-validate form-horizontal">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			    <div class="bs-example bs-example_dizayn">			   
                    <select class="dizayn form-control" id="dizayn" name="dizayn">
                        <option selected value="joomla_virtuemart0">Joomla + Virtuemart 0</option>
                        <option value="joomla_virtuemart1">Joomla + Virtuemart 1</option>
                        <option value="joomla_virtuemart2">Joomla + Virtuemart 2</option>
                        <option value="joomla_virtuemart3">Joomla + Virtuemart 3</option>
                        <option value="joomla_virtuemart4">Joomla + Virtuemart 4</option>
                    </select>               
			    </div>
			    <div class="bs-example bs-example_vyibor_sposobov_oplat"> 			    
                    <select class="vyibor_sposobov_oplat form-control" id="vyibor_sposobov_oplat" name="vyibor_sposobov_oplat">
                        <option selected value="vyibor_sposobov_oplat0">Cпособ оплаты 0</option>
                        <option value="vyibor_sposobov_oplat1">Cпособ оплаты 1</option>
                        <option value="vyibor_sposobov_oplat2">Cпособ оплаты 2</option>
                        <option value="vyibor_sposobov_oplat3">Cпособ оплаты 3</option>
                        <option value="vyibor_sposobov_oplat4">Cпособ оплаты 4</option>
                    </select>                
			    </div>
				<div class="bs-example bs-example_vyibor_sposobov_dostavki"> 			    
                    <select class="vyibor_sposobov_dostavki form-control" id="vyibor_sposobov_dostavki" name="vyibor_sposobov_dostavki">
                        <option selected value="vyibor_sposobov_dostavki0">Cпособ доставки 0</option>
                        <option value="vyibor_sposobov_dostavki1">Cпособ доставки 1</option>
                        <option value="vyibor_sposobov_dostavki2">Cпособ доставки 2</option>
                        <option value="vyibor_sposobov_dostavki3">Cпособ доставки 3</option>
                        <option value="vyibor_sposobov_dostavki4">Cпособ доставки 4</option>
                    </select>                
			    </div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			    <div class="bs-example bs-example-form bs-example_vyibor_sposobov_oplat">
   			    <div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox" id="vyibor_sposobov_oplat0" name="vyibor_sposobov_oplat0" value="vyibor_sposobov_oplat0">
                    </span>
                    <label for="vyibor_sposobov_oplat0" class="form-control">Способ оплаты №0</label>
                </div>
				<div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox" id="vyibor_sposobov_oplat1" name="vyibor_sposobov_oplat1" value="vyibor_sposobov_oplat1">
                    </span>
                   <label for="vyibor_sposobov_oplat1" class="form-control">Способ оплаты №1</label>
                </div>
				<div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox" id="vyibor_sposobov_oplat2" name="vyibor_sposobov_oplat2" value="vyibor_sposobov_oplat2">
                    </span>
                   <label for="vyibor_sposobov_oplat2" class="form-control">Способ оплаты №2</label>
                </div>
				<div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox" id="vyibor_sposobov_oplat3" name="vyibor_sposobov_oplat3" value="vyibor_sposobov_oplat3">
                    </span>
                   <label for="vyibor_sposobov_oplat3" class="form-control">Способ оплаты №3</label>
                </div>
				<div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox" id="vyibor_sposobov_oplat4" name="vyibor_sposobov_oplat4" value="vyibor_sposobov_oplat4">
                    </span>
                    <label for="vyibor_sposobov_oplat4" class="form-control">Способ оплаты №4</label>
                </div>
				</div>
				<div class="bs-example bs-example-form bs-example_vyibor_sposobov_dostavki">
   			    <div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox" id="vyibor_sposobov_dostavki0" name="vyibor_sposobov_dostavki0" value="vyibor_sposobov_dostavki0">
                    </span>
                    <label for="vyibor_sposobov_dostavki0" class="form-control">Cпособ доставки №0</label>
                </div>
				<div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox" id="vyibor_sposobov_dostavki1" name="vyibor_sposobov_dostavki1" value="vyibor_sposobov_dostavki1">
                    </span>
                   <label for="vyibor_sposobov_dostavki1" class="form-control">Cпособ доставки №1</label>
                </div>
				<div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox" id="vyibor_sposobov_dostavki2" name="vyibor_sposobov_dostavki2" value="vyibor_sposobov_dostavki2">
                    </span>
                   <label for="vyibor_sposobov_dostavki2" class="form-control">Cпособ доставки №2</label>
                </div>
				<div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox" id="vyibor_sposobov_dostavki3" name="vyibor_sposobov_dostavki3" value="vyibor_sposobov_dostavki3">
                    </span>
                   <label for="vyibor_sposobov_dostavki3" class="form-control">Cпособ доставки №3</label>
                </div>
				<div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox" id="vyibor_sposobov_dostavki4" name="vyibor_sposobov_dostavki4" value="vyibor_sposobov_dostavki4">
                    </span>
                    <label for="vyibor_sposobov_dostavki4" class="form-control">Cпособ доставки №4</label>
                </div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="bs-example bs-example-form bs-example_vyibor_shablon">				
   			    <div class="input-group">
                    <span class="input-group-addon">
                        <input type="radio" id="vyibor_shablon0" name="vyibor_shablon" value="vyibor_shablon0">
                    </span>
                    <label for="vyibor_shablon0" class="form-control" title="vyibor_shablon0">Шаблон №0</label>
                </div>
				<div class="input-group">
                    <span class="input-group-addon">
                        <input type="radio" id="vyibor_shablon1" name="vyibor_shablon" value="vyibor_shablon1">
                    </span>
                   <label for="vyibor_shablon1" class="form-control" title="vyibor_shablon1">Шаблон №1</label>
                </div>
				<div class="input-group">
                    <span class="input-group-addon">
                        <input type="radio" id="vyibor_shablon2" name="vyibor_shablon" value="vyibor_shablon2">
                    </span>
                   <label for="vyibor_shablon2" class="form-control" title="vyibor_shablon2">Шаблон №2</label>
                </div>
				<div class="input-group">
                    <span class="input-group-addon">
                        <input type="radio" id="vyibor_shablon3" name="vyibor_shablon" value="vyibor_shablon3">
                    </span>
                   <label for="vyibor_shablon3" class="form-control" title="vyibor_shablon3">Шаблон №3</label>
                </div>
				<div class="input-group">
                    <span class="input-group-addon">
                        <input type="radio" id="vyibor_shablon4" name="vyibor_shablon" value="vyibor_shablon4">
                    </span>
                    <label for="vyibor_shablon4" class="form-control" title="vyibor_shablon4">Шаблон №4</label>
                </div>
		    </div>
		</div>
		</form>
	</div>
