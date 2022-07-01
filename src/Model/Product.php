<?php

namespace APP\Model;
class Product{

    private int $barCode;
    private string $name;
    private float $price;
    private Provider $provider;
    private bool $isActive;

    public function __construct(
        float $cost,
        float $tributes,
        float $fixedCost,
       
        int $barCode,
        string $name,
        int $quantity,
        Provider $provider,
        float $lucre=0.2,
        bool $isActive = true
    )
    {
        $this->barCode = $barCode;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->provider = $provider;
        $this->isActive = $isActive;
    
        self::calculateSalePrice(
            tributes: $tributes,
            cost: $cost,
            lucre: $lucre,
            fixedCost: $fixedCost
        );    
    }

private function calculateSalePrice(float $cost,float $tributes,float $fixedCost, float $lucre = 0.4 )
:void
{
        $this->price =($cost+$tributes+$fixedCost)/(1-$lucre);
}
/**
 * Undocumented function
 *
 * @param float $cost
 * @return float
 */
private function calculateMarkup(float $cost):float
{
       return $this -> price/$cost;
}

}

?>
