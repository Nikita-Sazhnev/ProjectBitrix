
     </article>
     
     <aside class="right">
       <?if($APPLICATION->GetCurPage() != '/news/')
  		{$APPLICATION->IncludeComponent(
			"bitrix:main.include", 
			".default", 
			array(
				"AREA_FILE_RECURSIVE" => "Y",
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "right",
				"EDIT_TEMPLATE" => "standard.php",
				"PATH" => "/right_article.php",
				"COMPONENT_TEMPLATE" => ".default"
			),
			false
		);}?>
     </aside>
</section>

<div class="it_asist"></div>

<footer>
	<div class="copys">
		<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "includes",
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_RECURSIVE" => "Y"
	),
	false
);?>
	</div>
	<nav .class="footer-nav">
		<?$APPLICATION->IncludeComponent(
		"bitrix:menu", 
		"menu_bottom", 
		array(
			"ALLOW_MULTI_SELECT" => "N",
			"CHILD_MENU_TYPE" => "left",
			"DELAY" => "N",
			"MAX_LEVEL" => "1",
			"MENU_CACHE_GET_VARS" => array(
			),
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_TYPE" => "N",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"ROOT_MENU_TYPE" => "top",
			"USE_EXT" => "N",
			"COMPONENT_TEMPLATE" => "menu_bottom"
			),
			false
		);?>
	
	</nav>   
	<div class="mertiks">
		<div style="width: 2rem; height: 2rem; background: gray;"></div>
	</div>
</footer>


<!-- container --></div>
</div>
</body>
</html>
