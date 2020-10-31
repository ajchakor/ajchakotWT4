<?php

class RestaurantMenu {
    
    private $restMenuList;

    function __construct(array $restMenuList) {
        if (sizeof($restMenuList)>0) {
            $this->restMenuList = $restMenuList;
        } else {
            throw new Exception("There is No such available");
        }
    }

    public function getRestaurant_menu_name() {
        $menuNameList = [];

        foreach($this->restMenuList as $restaurant1) {
            $restaurantNameList[] = array(
                "name"=>$restaurant1['name']
            );
        }

        return json_encode($restaurantNameList);
    }

    public function getRestaurant_menu_details($name){
        $data_resp=["Invalid choice"];
        if($name){
            foreach($this->restMenuList as $restaurant1)
            {
                
                if($restaurant1['name'] == $name)
                {
                    
                        $data_resp=$restaurant1;
                        break;
                }
            }
        }
        return json_encode($data_resp);
    }

    
}
?>