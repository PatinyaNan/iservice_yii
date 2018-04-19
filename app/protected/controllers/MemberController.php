<?
	ob_start(); session_start();
	class MemberController extends Controller {
		public function actionCheckLogin(){
			$attributes = array();
			$attributes["employee_username"] = $_POST["user_username"];
			$attributes["employee_password"] = $_POST["user_password"];
			$attributes["employee_status"] = "active";

			$model = Employee::model()->findByAttributes($attributes);

			if(!empty($model)){
				Yii::app()->session["employee_id"]=$model->id;
				Yii::app()->session["employee_username"]=$model->employee_username;
				Yii::app()->session["employee_level"]=$model->employee_level;

				$this->redirect(array("home"));
			} else {
				$this->redirect(Yii::app()->homeUrl);
			}
		}

		public function actionHome(){
			$this->render("home");
		}

		public function actionLogout(){
			unset(Yii::app()->session["employee_id"]);
			unset(Yii::app()->session["employee_username"]);
			$this->redirect(Yii::app()->homeUrl);
		}
	}
?>
