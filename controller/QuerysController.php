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


    public function GroupdealsPaginateComision($params){
        try{
            $result = GroupdealsQuery::create()
                ->filterByNegociationType(2)
                // ->where($where = 'edition_state != 6')
                ->paginate($page = 1, $maxPerPage = 20);
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

    public function QbcSciSellByPetitionId($params){
        try{           
            $result = QbcSciSellQuery::create()->findOneByPetitionId($params['id']);
            if(empty($result)){
                $result = $this->error['NO_FOUND'] . json_encode($params['id']);
                if(!isset($params['no_die']))
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

    public function QbcSciSellDocByDocumentId($params){
        try{           
            $result = QbcSciSellDocQuery::create()->findByDocumentId($params);
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

    public function QbcSciCreditConstructDocBydocumentId($params){
        try{           
            $result = QbcSciCreditConstructDocQuery::create()->findByDocumentId($params);
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

    public function QbcSciCreditConstructDocBydocumentIdOne($params){
        try{           
            $result = QbcSciCreditConstructDocQuery::create()->findOneByDocumentId($params);
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

    public function QbcSciCreditConstructByPetitionId($params){
        try{           
            $result = QbcSciCreditConstructQuery::create()->findByPetitionId($params);
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

    public function QbcSciCreditConstructByPetitionIdOne($params){
        try{           
            $result = QbcSciCreditConstructQuery::create()->findOneByPetitionId($params);
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
    
    public function EnterpriseBannerContentById($params){
        try{           
            $result = EnterpriseBannerContentQuery::create()->findOneByBannerId($params['id']);
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
    
    public function AdminUserByUsername($params){
        try{           
            $result = AdminUserQuery::create()->findOneByUsername($params['user']);
            if(empty($result)){
                $result = array(
                    'message' => $this->error['NO_FOUND'] . json_encode($params['user']),
                    'status' => false
                );
                return $result;
            }
        }catch (Exception $e){
            $result = $this->exception . $e->getMessage(). "\n";
            $this->ErrorMessage($result);
        }
        return $result;
    }
    
    public function AdminRoleQueryByUserId($params){
        try{           
            $result = AdminRoleQuery::create()->findOneByUserId($params['id']);
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
    
    public function QbcSciClosureQueryByStatus($params){
        try{           
            $result = QbcSciClosureQuery::create()->findByStatus($params['id']);
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
    
    public function QbcSciManualCloseQueryByCampaignId($params){
        $where = 'status = ' . $params['status'];
        try{           
            $result = QbcSciManualCloseQuery::create()->where($where)->findByCampaignId($params['id']);
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
    
    public function QbcSciManualCloseQueryByCampaigns($params){
        $where = 'status = ' . $params['status'] . ' group by campaign_id';
        try{           
            $result = QbcSciManualCloseQuery::create()->where($where)->find();
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
    
}