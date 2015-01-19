<?php
/*
* author: Brisan
* app: backQBC
*/
class Querys {

    var $error = array(
        'NO_FOUND' => 'Value no found: ',
        'EMPTY' => 'Value is empty'
    );


    private function ErrorMessage($params){
        var_dump($params);
        die();
    }

    public function CouponMappingByIncrementId($params){
        try{
            if($params['one'] == 1){
                $result = CouponMappingQuery::create()->findOneByIncrementId($params['id']);
            }else{
                $result = CouponMappingQuery::create()->findByIncrementId($params['id']);
            }
            if(empty($result)){
                $result = $this->error['NO_FOUND'] . json_encode($params['id']);
                $this->ErrorMessage($result);
            }
        }catch (Exception $e){
            $result = $this->exception . $e->getMessage(). "\n";
            $this->ErrorMessage($result);
        }
        return $result;
    }

    public function SalesFlatOrderByEntityId($params){
        try{
            $result = SalesFlatOrderQuery::create()->findOneByEntityId($params['id']);
            if(empty($result)){
                $result = $this->error['NO_FOUND'] . $params['id'];
                $this->ErrorMessage($result);
            }
        }catch (Exception $e){
            $result = $this->exception .  $e->getMessage(). "\n";
            $this->ErrorMessage($result);
        }
        return $result;
    }

    public function SalesFlatOrderByIncrementId($params){
        try{
            if($params['one'] == 1){
                $result = SalesFlatOrderQuery::create()->findOneByIncrementId($params['id']);
            }else{
                $result = SalesFlatOrderQuery::create()->findByIncrementId($params['id']);
            }
            if(empty($result)){
                $result = $this->error['NO_FOUND'] . $params['id'];
                $this->ErrorMessage($result);
            }
        }catch (Exception $e){
            $result = $this->exception .  $e->getMessage(). "\n";
            $this->ErrorMessage($result);
        }
        return $result;
    }

    public function SalesFlatOrderItemByItemId($params){
        try{
            $result = SalesFlatOrderItemQuery::create()->findOneByItemId($params['id']);
            if(empty($result)){
                $result = $this->error['NO_FOUND'] . $params['id'];
                $this->ErrorMessage($result);
            }
        }catch (Exception $e){
            $result = $this->exception .  $e->getMessage(). "\n";
            $this->ErrorMessage($result);
        }
        return $result;
    }

    public function SalesFlatOrderItemByOrderId($params){
        try{
            if($params['one'] == 1){
                $result = SalesFlatOrderItemQuery::create()->findOneByOrderId($params['id']);
            }else{
                $result = SalesFlatOrderItemQuery::create()->findByOrderId($params['id']);
            }
            if(empty($result)){
                $result = $this->error['NO_FOUND'] . $params['id'];
                $this->ErrorMessage($result);
            }
        }catch (Exception $e){
            $result = $this->exception .  $e->getMessage(). "\n";
            $this->ErrorMessage($result);
        }
        return $result;
    }

    public function GroupdealsByProductId($params){
        try{
            if($params['one'] == 1){
                $result = GroupdealsQuery::create()->findOneByProductId($params['id']);
            }else{
                $result = GroupdealsQuery::create()->findByProductId($params['id']);
            }
            if(empty($result)){
                $result = $this->error['NO_FOUND'] . $params['id'];
                $this->ErrorMessage($result);
            }
        }catch (Exception $e){
            $result = $this->exception .  $e->getMessage(). "\n";
            $this->ErrorMessage($result);
        }
        return $result;
    }

    public function TreasuryTypesById($params){
        try{
            $result = TreasuryTypesQuery::create()->findOneById($params['id']);
            if(empty($result)){
                $result = $this->error['NO_FOUND'] . $params['id'];
                $this->ErrorMessage($result);
            }
        }catch (Exception $e){
            $result = $this->exception .  $e->getMessage(). "\n";
            $this->ErrorMessage($result);
        }
        return $result;
    }

    public function PagosonlineByIncrementId($params){
        try{
            if($params['one'] == 1){
                $result = PagosonlineQuery::create()->findOneByOrderId($params['id']);
            }else{
                $result = PagosonlineQuery::create()->findByOrderId($params['id']);
            }
            if(empty($result)){
                $result = $this->error['NO_FOUND'] . $params['id'];
                $this->ErrorMessage($result);
            }
        }catch (Exception $e){
            $result = $this->exception .  $e->getMessage(). "\n";
            $this->ErrorMessage($result);
        }
        return $result;
    }

    public function GroupdealsById($params){
        try{
            $result = GroupdealsQuery::create()->findOneByGroupdealsId($params['id']);
            if(empty($result)){
                $result = $this->error['NO_FOUND'] . $params['id'];
                $this->ErrorMessage($result);
            }
        }catch (Exception $e){
            $result = $this->exception .  $e->getMessage(). "\n";
            $this->ErrorMessage($result);
        }
        return $result;
    }


    public function GroupdealsMerchantsById($params){
        try{
            $result = GroupdealsMerchantsQuery::create()->findOneByMerchantsId($params['id']);
            if(empty($result)){
                $result = $this->error['NO_FOUND'] . $params['id'];
                $this->ErrorMessage($result);
            }
        }catch (Exception $e){
            $result = $this->exception .  $e->getMessage(). "\n";
            $this->ErrorMessage($result);
        }
        return $result;
    }

    public function CouponHistoryByCampaignId($params){
        try{
            $result = CouponHistoryQuery::create()->findByCampaignId($params['id']);
            if(empty($result)){
                $result = $this->error['NO_FOUND'] . json_encode($params['id']);
                $this->ErrorMessage($result);
            }
        }catch (Exception $e){
            $result = $this->exception . $e->getMessage(). "\n";
            $this->ErrorMessage($result);
        }
        return $result;

    }

    public function QbcSciSellByIncrementId($params){
        try{           
            $result = QbcSciSellQuery::create()->findByOrderId($params);
            if(empty($result)){
                $result = $this->error['NO_FOUND'] . json_encode($params);
                $this->ErrorMessage($result);
            }
        }catch (Exception $e){
            $result = $this->exception . $e->getMessage(). "\n";
            $this->ErrorMessage($result);
        }
        return $result;
    }

    public function QbcSciSellDocByPetitionId($params){
        try{           
            $result = QbcSciSellDocQuery::create()->findByPetitionId($params['petitions']);
            if(empty($result)){
                $result = $this->error['NO_FOUND'] . json_encode($params['petitions']);
                $this->ErrorMessage($result);
            }
        }catch (Exception $e){
            $result = $this->exception . $e->getMessage(). "\n";
            $this->ErrorMessage($result);
        }
        return $result;
    }

    public function QbcSciDevolutionByCampaignId($params){
        try{           
            $result = QbcSciDevolutionQuery::create()->findByCampaignId($params['id']);
            if(empty($result)){
                $result = $this->error['NO_FOUND'] . json_encode($params['id']);
                $this->ErrorMessage($result);
            }
        }catch (Exception $e){
            $result = $this->exception . $e->getMessage(). "\n";
            $this->ErrorMessage($result);
        }
        return $result;
    }

    public function EnterpriseBannerByName($params){
        try{           
            $result = EnterpriseBannerQuery::create()->findOneByName($params['name']);
            if(empty($result)){
                $result = $this->error['NO_FOUND'] . json_encode($params['name']);
                $this->ErrorMessage($result);
            }
        }catch (Exception $e){
            $result = $this->exception . $e->getMessage(). "\n";
            $this->ErrorMessage($result);
        }
        return $result;
    }

}