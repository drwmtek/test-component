<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();$this->setFrameMode(true);?>
<? $this->addExternalCss("/local/bootstrap.min.css"); ?>
<? $this->addExternalJS("/local/jquery.js"); ?>
<? $this->addExternalJS("/local/bootstrap.min.js"); ?>
<div id="olofSlider" style="max-height: 300px; max-width: 300px;" class="carousel" data-ride="carousel">
	<div class="carousel-inner">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<div class="carousel-item <?if ($arItem['ACTIVE']):?> active<?endif;?>" id="olof:slider<?=$arItem["ID"]?>">
				<div style="text-align: center; margin: 20px; font-size: 20px;"><?=$arItem["NAME"]?></div>
					<img style="max-height: 300px; max-width: 300px;" class="d-block img-fluid" 
					src="<?=$arItem['PROPERTY_IMAGE']?>">
				</div>
		<?endforeach;?>
	</div>
	<a class="left carousel-control" data-target="#olofSlider" role="button" href="olof:slider" data-slide="prev">
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" data-target="#olofSlider" role="button" href="olof:slider" data-slide="next">
		<span class="sr-only">Next</span>
	</a>
</div>