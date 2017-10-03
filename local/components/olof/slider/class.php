<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/**
 * USING
 * <?$APPLICATION->IncludeComponent(
 *	"olof:slider", 
 *	"bootstrap", 
 *	array(
 *		"COMPONENT_TEMPLATE" => "bootstrap",
 *		"ITEMS" => Array(
 *			Array("ID" => 1, "ACTIVE" => false, "PROPERTY_IMAGE" => "image_url.png", "NAME" => "firstName"),
 *			Array("ID" => 2, "ACTIVE" => true, "PROPERTY_IMAGE" => "image_url.jpg", "NAME" => "secondName")
 *		)
 *	),
 *	false
 * );?>
*/
class COlofSlider extends CBitrixComponent
{
    public function executeComponent()
    {
        if($this->startResultCache())
        {
            $this->arResult = $this->arParams;
            $this->includeComponentTemplate();
        }
        return $this->arResult;
    }
}?>
