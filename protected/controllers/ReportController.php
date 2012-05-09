<?php

class ReportController extends Controller
{
        /**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
        
        /**
	 * Lists all models.
	 */
	public function actionIndex()
	{
            $result= array();
            if (isset($_POST['start_at']))
            {
                $start_at = CDateTimeParser::parse($_POST['start_at'], 'dd.mm.yyyy');
                $end_at = CDateTimeParser::parse($_POST['end_at'], 'dd.mm.yyyy');
                $result= Order::model()->findAll("created_at between $start_at and $end_at");
            }
            
            $this->render('index',array( 'result' => $result
            ));
	}
}
?>