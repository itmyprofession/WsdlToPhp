<?php
/**
 * Class file for XiCurrenciesTypeGetCurrencyChartBinary
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetCurrencyChartBinary
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetCurrencyChartBinary extends XiCurrenciesWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The PeriodType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeHistoricalPeriodTypes
	 */
	public $PeriodType;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * The Style
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeStockChartStyles
	 */
	public $Style;
	/**
	 * The Width
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Width;
	/**
	 * The Height
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Height;
	/**
	 * The Preset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Preset;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiCurrenciesTypeHistoricalPeriodTypes PeriodType
	 * @param string StartDate
	 * @param string EndDate
	 * @param XiCurrenciesTypeStockChartStyles Style
	 * @param int Width
	 * @param int Height
	 * @param string Preset
	 * @return XiCurrenciesTypeGetCurrencyChartBinary
	 */
	public function __construct($_Symbol = null,$_PeriodType,$_StartDate = null,$_EndDate = null,$_Style,$_Width,$_Height,$_Preset = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'PeriodType'=>$_PeriodType,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'Style'=>$_Style,'Width'=>$_Width,'Height'=>$_Height,'Preset'=>$_Preset));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set PeriodType
	 * @param HistoricalPeriodTypes PeriodType
	 * @return HistoricalPeriodTypes
	 */
	public function setPeriodType($_PeriodType)
	{
		return ($this->PeriodType = XiCurrenciesTypeHistoricalPeriodTypes::valueIsValid($_PeriodType)?$_PeriodType:null);
	}
	/**
	 * Get PeriodType
	 * @return XiCurrenciesTypeHistoricalPeriodTypes
	 */
	public function getPeriodType()
	{
		return $this->PeriodType;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set Style
	 * @param StockChartStyles Style
	 * @return StockChartStyles
	 */
	public function setStyle($_Style)
	{
		return ($this->Style = XiCurrenciesTypeStockChartStyles::valueIsValid($_Style)?$_Style:null);
	}
	/**
	 * Get Style
	 * @return XiCurrenciesTypeStockChartStyles
	 */
	public function getStyle()
	{
		return $this->Style;
	}
	/**
	 * Set Width
	 * @param int Width
	 * @return int
	 */
	public function setWidth($_Width)
	{
		return ($this->Width = $_Width);
	}
	/**
	 * Get Width
	 * @return int
	 */
	public function getWidth()
	{
		return $this->Width;
	}
	/**
	 * Set Height
	 * @param int Height
	 * @return int
	 */
	public function setHeight($_Height)
	{
		return ($this->Height = $_Height);
	}
	/**
	 * Get Height
	 * @return int
	 */
	public function getHeight()
	{
		return $this->Height;
	}
	/**
	 * Set Preset
	 * @param string Preset
	 * @return string
	 */
	public function setPreset($_Preset)
	{
		return ($this->Preset = $_Preset);
	}
	/**
	 * Get Preset
	 * @return string
	 */
	public function getPreset()
	{
		return $this->Preset;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>