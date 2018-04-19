<?php
  class ConfigController extends Controller{
    public function actionIndex(){
      $this->render("index");
    }
    public function actionRepairType(){
      $model = new RepairType();

      $this->render("RepairType",array(
        "model" => $model
      ));
    }
    public function actionRepairTypeForm($id = null){
      if(!empty($_POST["RepairType"])){
        $repairType = new RepairType();
        $id = $_POST["RepairType"]["id"];

          if(!empty($id)){
            $repairType = RepairType::model()->findByPk($id);
          }
          $repairType->_attributes = $_POST["RepairType"];

          if($repairType->save()){
            $this->redirect(array("RepairType"));
              }
          }
            $model = new RepairType();

            if(!empty($id)){
              $model = RepairType::model()->findByPk($id);
            }
              $this->render("RepairTypeForm",array(
                "model" => $model
              ));
            }
    public function actionRepairTypeDelete($id){
      RepairType::model()->deleteByPk($id);
      $this->redirect(array("RepairType"));
    }
  }
 ?>
